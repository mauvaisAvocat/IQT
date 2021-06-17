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
		$config['upload_path'] = $this->folder;
		$config['allowed_types'] = 'jpeg|jpg|png|gif';
		$config['remove_spaces'] = TRUE;

		$this->load->library('upload', $config);
	}

	public function index()
	{
		$data['images'] = $this->Post_model->images_routes();
		if (isset($images))
		{
			$images = glob($this->folder.'/*');
			foreach ($images as $image)
			{
				if (is_file($image))
					unlink($image);
			}
		}
	}

	public function load_posts()
	{

		if (!$this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/load_post', $data);
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
				'nom_post' => $name,
				'id' => $this->session->userdata('id')
			);
			$this->Post_model->insert_post($data);

			$data['archivo'] = $this->upload->data();

			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/load_post', $data);
			$this->load->view('private/footer');
		}
	}

	public function btn_delete($id_post)
	{
		if ($this->Post_model->delete_post($id_post))
		{
			$data['posts_list'] = $this->Post_model->get_user_posts($this->session->userdata('id'));
			$data['message'] = "Se ha eliminado exitosamente";
			$this->load->view('private/header', array("username" => $this->session->userdata('username')));
			$this->load->view('private/posts', $data);
			$this->load->view('private/footer');
		}
	}

	public function show_form()
	{
		$this->load->view('private/load_post');
	}
}
?>