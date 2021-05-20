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

	public function enter() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$resp = $this->Login_model->login($username, $password);

		if ($resp) {
			$data = array(
				"id" => $resp->id,
				"username" => $resp->username,
				"login" => TRUE
			);

			$this->session->set_userdata($data);
			$this->load->view('home');
		}
		else {
			echo "error";
		}
	}

	public function logout() {

	}
}