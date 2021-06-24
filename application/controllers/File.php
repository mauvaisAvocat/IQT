<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('File_model');
		$this->load->model('Directory_model');
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

	public function load_files($id_carpeta)
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
			$data['folders_list'] = $this->File_model->get_folders();
			$data['direction_list'] = $this->Directory_model->get_direction();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('private/header', $data);
			$this->load->view('private/load_files', $error);
			$this->load->view('private/footer');
		}
		else
		{
			$date = $this->input->post('date');
			$description = $this->input->post('description');
			$file_name = $this->upload->data('file_name');
			$data = array(
			"NOMBRE" => $file_name,
			"DESCRIPCION" => $description,
			"RUTA" => $this->folder.$file_name,
			"ESTATUS" => "A",
			"FECHA" => $date,
			"ID_CARPETA" => $id_carpeta
			);
			$res = $this->File_model->insert_file($data);
			
			$data['archivo'] = $this->upload->data();
			$data['folders_list'] = $this->File_model->get_folders();
			$data['direction_list'] = $this->Directory_model->get_direction();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('private/header', $data);
			$this->load->view('private/load_files', $data);
			$this->load->view('private/footer');
		}
	}

	public function download_file($id_file, $id_carpeta)
	{
		$res = $this->File_model->get_rute($id_file, $id_carpeta);
		$data = file_get_contents($res->RUTA);
		$name = $res->NOMBRE;
		force_download($name, $data);
	}

	public function show_files($id_carpeta)
	{
		$data['files'] = $this->File_model->get_files($id_carpeta);
		$data['message'] = "No hay archivos";
		$data['folders_list'] = $this->File_model->get_folders();
		$data['direction_list'] = $this->Directory_model->get_direction();
		$data['username'] = $this->session->userdata('username');

		$this->load->view('private/header', $data);
		$this->load->view('private/files', $data);
		$this->load->view('private/footer');
	}

	public function upload_folder()
	{
		$folder_name = $this->input->post('foldername');
		$data = array(
			"NOMBRE" => $folder_name,
			"ESTATUS" => 'A'
		);

		$res = $this->File_model->insert_folder($data);
		if ($res)
		{
			redirect(base_url().'main/enter');
		}
	}

} 
?>