<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model
{
	function insert_file($data)
	{
		$this->db->insert('Archivos', $data);
	}

	function get_files()
	{
		$query = "SELECT * FROM Archivos";
		$res = $this->db->query($query);
		return $res->result();
	}

	function get_rute($name)
	{
		$this->db->where('NOMBRE', $name);
		$res = $this->db->get('Archivos');
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

	function get_id_folder($id_carpeta, $id_archivo)
	{
		$query = "UPDATE Archivos SET ID_CARPETA=$id_carpeta WHERE ID=".$id_archivo;
	}
}
?>