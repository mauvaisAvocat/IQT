<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model
{
	function insert_file($data)
	{
		$this->db->insert('archivo', $data);
	}

	function get_files()
	{
		$query = "SELECT * FROM archivo";
		$res = $this->db->query($query);
		return $res->result();
	}

	function get_rute($name)
	{
		$this->db->where('nom_arch', $name);
		$res = $this->db->get('archivo');
		$array = $res->result();
		return $array[0];
	}

	function file_routes()
	{
		$query = "SELECT ruta FROM archivo";
		$res = $this->db->query($query);
		return $res->result();
	}
}
?>