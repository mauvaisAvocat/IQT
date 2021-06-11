<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model
{
	function insert_post($data)
	{
		$this->db->insert('post', $data);
	}

	function get_posts()
	{
		$query = "SELECT id_post, titulo, mensaje, ruta, post.extension, nom_post, post.id, username, estatus 
				FROM post, usuario WHERE post.id = usuario.id AND estatus = 1";
		$res = $this->db->query($query);
		return $res->result(); 
	}

	function get_user_posts($user_id)
	{
		$query = "SELECT id_post, titulo, mensaje, ruta, post.extension, nom_post, post.id, username
				FROM post, usuario WHERE post.id = usuario.id AND post.id = ".$user_id;
		$res = $this->db->query($query);
		return $res->result();
	}

	function delete_post($id_post)
	{
		$query = "DELETE FROM post WHERE id_post=".$id_post;
		$this->db->query($query);
		return true;
	}

	function images_routes()
	{
		$query = "SELECT ruta FROM post ";
		$res = $this->db->query($query);
		return $res->result();
	}

}
?>