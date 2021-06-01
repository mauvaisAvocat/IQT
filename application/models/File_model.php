<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model
{
	function insert_file($data)
	{
		$this->db->insert('archivo', $data);
	}
}
?>