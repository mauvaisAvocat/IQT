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
		$query = "SELECT * FROM post";
		$res = $this->db->query($query);
		return $res->result(); 
	}

	function get_user_posts($user_id)
	{
		$query = "SELECT * FROM post WHERE id=".$user_id;
		$res = $this->db->query($query);
		return $res->result();
	}

	function delete_post($id_post)
	{
		$query = "DELETE FROM post WHERE id_post=".$id_post;
		$this->db->query($query);
		return true;
	}

	function get_user_post($user_id)
	{
		$query = "SELECT username FROM post, usuario WHERE usuario.id = post.id AND usuario.id=".$user_id;
		$res = $this->db->query($query);
		return $res->result(); 
	}
}
?>