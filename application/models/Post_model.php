<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model
{
	function insert_post($data)
	{
		$this->db->insert('Archivos', $data);
	}

	function get_posts()
	{
		$query = "SELECT * FROM Archivos";
		$res = $this->db->query($query);
		return $res->result();
	}

	function delete_post($id_post)
	{
		$query = "DELETE FROM Archivos WHERE ID=".$id_post;
		$this->db->query($query);
		return true;
	}

	function images_routes()
	{
		$query = "SELECT RUTA FROM Archivos ";
		$res = $this->db->query($query);
		return $res->result();
	}

}
?>