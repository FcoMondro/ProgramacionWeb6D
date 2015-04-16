<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getPost()
	{
		$sql = "SELECT * FROM posts";
		$result =  $this ->db->query($sql);
		return $result->result_array();
	}


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */