<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Post_model');
		$this->load->library('encryption');

	}

	public function index()
	{
		$data['posts'] = $this->Post_model->get_posts();
		$this->load->view('main_header');
		$this->load->view('main_page', $data);
		$this->load->view('main_footer');
		$this->load->helper('url');
		if ($this->session->userdata('username') != "")
		{
			$this->session->unset_userdata('username');
			redirect(base_url());
		}
	}

	public function directory_view()
	{
		$this->load->view('directory');
		$this->load->view('main_footer');
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
				$this->session->set_flashdata('error', '<span class="text-danger"><br>Username y password invalidos</span>');
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
			$this->load->view('private/header', array("username" => $username));
			$this->load->view('private/dashboard');
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

		$this->load->view('private/header', array("username" => $username));
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

	public function files_menu_carpeta11()
	{
		$username = $this->session->userdata('username');
		$this->load->view('private/header', array("username" => $username));
		$this->load->view('private/files_menu_carpeta11.php');
		$this->load->view('private/footer');
	}

	public function files_menu_carpeta12()
	{
		$this->load->view('private/header');
		$this->load->view('private/files_menu_carpeta_12');
		$this->load->view('private/footer');
	}

	public function carpetas()
	{
		$this->load->view('private/header');
		$this->load->view('private/carpetas');
		$this->load->view('private/footer');
	}

	public function load_files()
	{
		$username = $this->session->userdata('username');
		$this->load->view('private/header', array("username" => $username));
		$this->load->view('private/load_files');
		$this->load->view('private/footer');
	}

	public function lock_user()
	{
		$id = $this->session->userdata('id');
		$this->Login_model->update_status($id);
		redirect(base_url());
	}

	public function show_files()
	{
		$username = $this->session->userdata('username');
		$this->load->view('private/header', array("username" => $username));
		$this->load->view('private/files');
		$this->load->view('private/footer');
	}
}