<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Post_model');
		$this->load->model('File_model');
		$this->load->library('encryption');

	}

	public function index()
	{
		$data['posts'] = $this->Post_model->get_posts();
		$this->load->view('cover_header');
		$this->load->view('cover_page', $data);
		$this->load->view('cover_footer');
		$this->load->helper('url');
		if ($this->session->userdata('username') != "")
		{
			$this->session->unset_userdata('username');
			redirect(base_url());
		}
	}

	public function contact()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$issue = $this->input->post('issue');
		$message = $this->input->post('message');

		$data = array(
			"nombre" => $name,
			"email" => $email,
			"asunto" => $issue,
			"mensaje" => $message
		);

		$res = $this->Login_model->send_contact($data);
		if ($res)
		{
			redirect(base_url());
		}
	}

	public function directory_view()
	{
		$this->load->view('cover_header');
		$this->load->view('directory');
		$this->load->view('cover_footer');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$resp = $this->Login_model->login($username, $password);

			if ($resp) 
			{
				$data = array(
					"id" => $resp->id,
					"username" => $resp->username,
					"login" => TRUE
				);

				$this->session->set_userdata($data);
				redirect(base_url() . 'main/enter');
			}
			else
			{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Username o contraseña inválida</div>');
				redirect(base_url());
			}
		}
		else
		{
			$this->index();
		}
	}

	public function enter() {
		$res = $this->Login_model->get_user($this->session->userdata('id'));
		$username = $this->session->userdata('username');
		if ($this->session->userdata('username') != '' && $res->estatus == 1) 
		{
			$data['posts_list'] = $this->Post_model->get_user_posts($this->session->userdata('id'));
			$data['folders_list'] = $this->File_model->get_folders();
			$data['username'] = $username;
			$this->load->view('private/header', $data);
			$this->load->view('private/posts', $data);
			$this->load->view('private/footer');	
		}
		else 
		{
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url());
	}

	public function user_settings()
	{
		$id = $this->session->userdata('id');
		$username = $this->session->userdata('username');
		$res = $this->Login_model->get_user($id);
		$data = array(
			"address" => $res->domicilio,
			"phone" => $res->telefono,
			"extension" => $res->extension,
			"rfc" => $res->rfc,
			"curp" => $res->curp,
			"password" => $res->password
		);
		$data['folders_list'] = $this->File_model->get_folders();
		$data['username'] = $username;

		$this->load->view('private/header', $data);
		$this->load->view('private/profile', $data);
		$this->load->view('private/footer');
	}

	public function edit_user()
	{
		$id = $this->session->userdata('id');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$extension = $this->input->post('extension');
		$rfc = $this->input->post('rfc');
		$curp = $this->input->post('curp');
		$password = $this->input->post('password');
		$data = array(
			"domicilio" => $address,
			"telefono" => $phone,
			"extension" => $extension,
			"rfc" => $rfc,
			"curp" => $curp,
			"password" => $password
		);		
		$resp = $this->Login_model->update_user($id, $data);
		redirect(base_url(). 'main/user_settings');
	}

	public function load_files()
	{
		$username = $this->session->userdata('username');
		$data['folders_list'] = $this->File_model->get_folders();
		$data['username'] = $username;
		$this->load->view('private/header', $data);
		$this->load->view('private/load_files');
		$this->load->view('private/footer');
	}

	public function lock_user()
	{
		$id = $this->session->userdata('id');
		$this->Login_model->update_status($id);
		redirect(base_url());
	}
}