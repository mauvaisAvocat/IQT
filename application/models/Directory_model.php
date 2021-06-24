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
		$query = "SELECT 'Empleados.Nombre', Puesto, Telefono, correo, 'Areas.NOMBRE' FROM Empleados, Areas   
		WHERE Area = 'Areas.ID' AND Direccion=".$id_direction;
		$res = $this->db->query($query);
		return $res->result();
	}
}
?>