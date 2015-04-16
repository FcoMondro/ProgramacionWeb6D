<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model', 'blog');
	}

	public function index()
	{
		$datos = array('nombre'=>'Amayelli','titulo'=>'Mi primer controlador','posts'=>$this->blog->getPost());
		$this->load->view('inicio_view',$datos);
		
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */