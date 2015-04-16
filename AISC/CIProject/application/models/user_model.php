<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertUser($username,$pass)
	{
		$sql = "INSERT INTO AUTHORS(USERNAME,PASSWORD) VALUES ('".$username."','".$pass"')";
		$result = $this->db->query($sql);
		return $this->db->inster_id();
	}

	public function login($username,$pass)
	{ 
		$sql = "SELECT AUTHORS_ID,USERNAME,PASSWORD FROM AUTHORS WHERE USERNAME = '".$username."' AND PASSWORD = '".$pass."'";
		$result = $this->db->query($sql);
		return $result->result();

	}


}
