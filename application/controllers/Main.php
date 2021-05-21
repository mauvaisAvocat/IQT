<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->load->view('main_page');
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
				$this->session->set_flashdata('error', 'Username y password invalidos');
				redirect(base_url());
			}
		}
		else
		{
			$this->index();
		}
	}

	public function enter() {
		if ($this->session->userdata('username') != '') 
		{
			echo '<h2>Welcome - '. $this->session->userdata('username') .' </h2>';
			echo '<a href="'. base_url() .'main/logout">Logout</a>';	
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
}