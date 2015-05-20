<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model("Inicio_model", "inicio");
		//Do your magic here
	}

	public function getCiudades($idEstado)
	{
		echo json_encode($this->inicio->getCiudades($idEstado));
	}

	public function getCodigos($idCiudad)
	{
		echo json_encode($this->inicio->getCodigos($idCiudad));
	}

	public function getColonias($idCodigo)
	{
		echo json_encode($this->inicio->getColonias($idCodigo));
	}
}
/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */