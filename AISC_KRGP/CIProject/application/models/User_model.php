<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertUser($username,$pass)
	{
		$sql = "INSERT INTO AUTHORS(USERNAME, PASSWORD) VALUES ('".$username."','".$pass."')";
		$result = $this->db->query($sql);
		return $this->db->insert_id();
	}

	public function login($username, $pass)
	{
		$sql = "SELECT author_id, username, password FROM AUTHORS WHERE username = '$username' AND password = '$pass'";
		$result = $this->db->query($sql);
		return $result->result();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */