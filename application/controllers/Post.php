<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post_model');
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/images/';
	}

	public function load_posts()
	{
		$config['upload_path'] = $this->folder;
		$config['allowed_types'] = 'jpeg|jpg|png|gif';
		$config['remove_spaces'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload())
		{
			$error = array(
				'error' => $this->upload->display_errors()
			);
			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/load_post', $error);
			$this->load->view('private/footer');
		}
		else
		{
			$tittle = $this->input->post('tittle');
			$message = $this->input->post('message');
			$route = $this->folder.$this->upload->data('file_name');
			$extension = $this->upload->data('file_ext');
			$name = $this->upload->data('raw_name');

			$data = array(
				'titulo' => $tittle,
				'mensaje' => $message,
				'ruta' => $route,
				'extension' => $extension,
				'nom_post' => $name
			);
			$this->Post_model->insert_post($data);

			$data['archivo'] = $this->upload->data();
			redirect(base_url().'main/load_posts', $data);
		}
	}

	public function btn_delete($id_post)
	{
		if ($this->Post_model->delete_post($id_post))
		{
			redirect(base_url().'main/load_posts');
		}
	}

}
?>