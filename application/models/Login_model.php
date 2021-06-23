<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($email) 
	{
		$this->db->where('correo', $email);
		$result = $this->db->get('Empleados');
		
		if ($result->num_rows() > 0) {
			return $result->row();
		}
		else {
			return false;
		}
	}

	function get_user($id) 
	{
		$this->db->where('Id_control', $id);
		$res = $this->db->get('Empleados');

		$array = $res->result();
		return $array[0];
	}

	function update_user($id, $data)
	{
		$this->db->where('Id_control', $id);
		$this->db->update('Empleados', $data);
	}

	function update_status($id)
	{
		$query = "UPDATE EMPLEADOS SET ESTATUS = 'A' WHERE Id_control =".$id;
		$this->db->query($query);
	}

}
?>