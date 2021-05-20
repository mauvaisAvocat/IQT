<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('usuario');
		if ($result->num_rows() > 0) {
			return $result->row();
		}
		else {
			return false;
		}
	}
}
?>