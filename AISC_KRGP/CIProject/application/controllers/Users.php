<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user');
		$this->load->library('session');
	}

	public function index()
	{
		$datos = array(
				'titulo'=>"Agregar nuevo usuario",
				'boton' => "Agregar usuario",
				'valor' => "Users/agregar"
			);
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('Authors_view', $datos);
		$this->load->view('footer');
	}

	public function cerrar()
	{
		session_destroy();
		header("Location:../Inicio");
	}

	public function login()
	{
		$datos = array(
				'titulo'=>"Ingresar",
				'boton' => "Ingresar",
				'valor' => "../Users/ingresar"
			);
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('Authors_view', $datos);
		$this->load->view('footer');
	}

	public function agregar()
	{
		$username = $this->input->post('user');
		$pass = md5($this->input->post('password'));

		$id = $this->user->insertUser($username, $pass);
		if($id>0)
		{
			$userdata=array("username"=> $username, "idAuthor"=>$id);
			$this->session->set_userdata( $userdata );
			header("Location:../Inicio");
		}
		else
			header("Location:../users");
	}

	public function ingresar()
	{
		$username = $this->input->post('user');
		$pass = md5($this->input->post('password'));
		$user = $this->user->login($username, $pass)[0];
		//var_dump($user);
		$id = $user->author_id;
		$username = $user->username;
		/*echo $id;
		echo $username;
		*/
		if($id>0)
		{
			$userdata=array("username"=> $username, "idAuthor"=>$id);
			$this->session->set_userdata( $userdata );
			header("Location:../Inicio");
		}
		else
			header("Location:../users/login");
		
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */