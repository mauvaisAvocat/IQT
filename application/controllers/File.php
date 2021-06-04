<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('File_model');
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/files/';
	}

	public function index()
	{
		$data['names'] = $this->File_model->file_routes();
		if (!isset($names))
		{
			$routes = glob($this->folder.'/*');
			foreach ($routes as $route) {
				if (is_file($route))
					unlink($route);
			}
		}
	}

	public function load_files()
	{
		$config['upload_path'] = $this->folder;
		$config['allowed_types'] = '*';
		$config['remove_spaces']=TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload())
		{
			$error = array(
				'error' => $this->upload->display_errors()
			);
			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/load_files', $error);
			$this->load->view('private/footer');
		}
		else
		{
			$date = $this->input->post('date');
			$description = $this->input->post('description');
			$file_name = $this->upload->data('file_name');
			$file_extension = $this->upload->data('file_ext');
			$row_name = $this->upload->data('raw_name');
			$data = array(
			"nombre" => $row_name,
			"fecha" => $date,
			"descripcion" => $description,
			"ruta" => $this->folder.$file_name,
			"extension" => $file_extension,
			"nom_arch" => $file_name
			);
			$res = $this->File_model->insert_file($data);
			
			$data['archivo'] = $this->upload->data();
			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/load_files', $data);
			$this->load->view('private/footer');
		}
	}

	public function download_file($name)
	{
		$res = $this->File_model->get_rute($name);
		$data = file_get_contents($res->ruta);
		force_download($name, $data);
	}

	public function show_files()
	{
		$data['files'] = $this->File_model->get_files();
		$data['message'] = "No hay archivos";

		$this->load->view('private/header', array("username" => $this->session->userdata('username')));
		$this->load->view('private/files', $data);
		$this->load->view('private/footer');
	}
} 
?>