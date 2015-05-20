<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model("Inicio_model", "inicio");
		//Do your magic here
	}

	public function index()
	{
		$data['estados'] = $this->inicio->getEstados();
		$this->load->view('ajaxRequest');
		$this->load->view('partials/modal_ajax', $data);
	}
}
/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */