<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  ver_post_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('post_model','post');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('ver_post');
		$this->load->view('footer');
	}
}