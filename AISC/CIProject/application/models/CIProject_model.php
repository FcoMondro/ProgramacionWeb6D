<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIProject_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getLibros(){
		$str_query = "SELECT * FROM LIBROS";
		$query = $this->db->query($str_query);
		return $query->result();
	}

}

/* End of file cIProjectModel.php */
/* Location: ./application/models/cIProjectModel.php */