<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model
{
	function insert_file($data)
	{
		$this->db->insert('Archivos', $data);
	}

	function get_files($id_carpeta)
	{
		$query = "SELECT * FROM Archivos WHERE ID_CARPETA=".$id_carpeta;
		$res = $this->db->query($query);
		return $res->result();
	}

	function get_rute($id_file, $id_carpeta)
	{
		$query = "SELECT * FROM Archivos WHERE ID=$id_file AND ID_CARPETA=".$id_carpeta;
		$res = $this->db->query($query);
		$array = $res->result();
		return $array[0];
	}

	function file_routes()
	{
		$query = "SELECT RUTA FROM Archivos";
		$res = $this->db->query($query);
		return $res->result();
	}

	function insert_folder($data)
	{
		$this->db->insert('Carpetas', $data);
		return true;
	}

	function get_folders()
	{
		$query = "SELECT * FROM Carpetas";
		$res = $this->db->query($query);
		return $res->result();
	}

}
?>