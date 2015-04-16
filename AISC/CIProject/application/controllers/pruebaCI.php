<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PruebaCI extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CIProject_Model');
	}

	public function index()
	{
		$libros = $this->CIProject_Model->getLibros();

		$data = array('nombre'=>'Hector','libros'=>$libros);
		$this->load->view('msgMVC_view',$data);

	}

}

/* End of file pruebaCI.php */
/* Location: ./application/controllers/pruebaCI.php */