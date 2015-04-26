<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model("blog_model", "blog");
		$this->load->library('session');
	}
	
	public function index()
	{
		$datos = array(
				'posts'=>$this->blog->getPosts(),
				'tags'=>$this->blog->getTags()
			);
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('inicio', $datos);
		$this->load->view('footer');
	}
	public function mostrar($id_post)
	{
		$datos = array(
				'posts'=>$this->blog->getUniquePost($id_post),
				'tags'=>$this->blog->getUniqueTags($id_post),
				'comments' => $this->blog->getComments($id_post)
			);
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('ver_post', $datos);
		$this->load->view('footer');
	}

}
/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */