<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('User_model','User');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('registro');
	}

	public function agregar()
	{
		$username = $this->input ->post('username');
		$pass = md5($this->input->post('pass'));

		//$id = $this->user->inserUser($username,$pass);

		if($id>0)
		{
			$userdata = array('username' => $username);
			$this ->session ->set_userdata($userdata);
			header('Location:Inicio');
		}
		else
		{
			header('Location:users');
		}

	}

}
/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */