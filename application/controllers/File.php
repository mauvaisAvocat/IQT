<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('File_model');
	}

	public function load_files()
	{
		$date = $this->input->post('date');
		$document = $this->input->post('document');
		$description = $this->input->post('description');
		$data = array(
			"fecha" => $date,
			"documento" => $document,
			"descripcion" => $description
		);
		$res = $this->File_model->insert_file($data);
		redirect(base_url().'main/load_files');

	}
} 
?>