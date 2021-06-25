<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directory_model extends CI_Model
{
	function get_direction()
	{
		$query = "SELECT * FROM Direccion";
		$res = $this->db->query($query);
		return $res->result();
	}

	function get_info($id_direction)
	{
		$query = "SELECT Nombre, Apellido_paterno, Apellido_materno, Area, Puesto, Telefono, correo FROM Empleados WHERE Direccion=".$id_direction;
		$res = $this->db->query($query);
		return $res->result();
	}
}
?>