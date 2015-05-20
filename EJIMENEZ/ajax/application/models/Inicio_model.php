<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getEstados()
	{
		$this->db->select('idEstado, Estado');
		$result = $this->db->get('Estados');
		return $result->result();
	}

	public function getCiudades($idEstado)
	{
		$this->db->select('idCiudad, ciudad');
		$this->db->where('estado',$idEstado);
		$result = $this->db->get('ciudades');
		return $result->result();
	}

	public function getCodigos($idCiudad)
	{
		$sql = "SELECT DISTINCT (codigo) FROM colonias WHERE ciudad = ".$idCiudad;
		$result = $this->db->query($sql);
		return $result->result();
	}

	public function getColonias($idCodigo)
	{
		$sql= "SELECT idColonia, UPPER(colonia) AS colonia FROM colonias WHERE codigo = ".$idCodigo;
		$result = $this->db->query($sql);
		return $result->result();
	}
}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */