<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model','post');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->has_userdata('username'))
		{
			$datos['autor']=$this->session->userdata('username');
		}
		$this->load->view('header', $datos);
		$this->load->view('Post_add');
		$this->load->view('footer');
	}

	public function agregar()
	{
		$titulo = $this->input->post('titulo');
		$contenido = $this->input->post('contenido');
		$tags = $this->input->post('tags');
		
		$tags = explode(", ", $tags);
		$salida = array();
		foreach ($tags as $i) 
		{
			$i = trim($i);
			if (!empty($i)) {
				$salida[]=$i;
			}
		}
		$tags = $salida;
		//var_dump($tags);		
		$count = count($tags);
		$id = $this->post->agregarPost($titulo, $contenido);
		for ($i = 0; $i < $count; $i++) 
		{
			//echo $tags[$i];
			$id_tag = $this->post->agregarTags($tags[$i]);
			$this->post->agregarPostTags($id, $id_tag);
		}
		if($id>0)
		{
			header("Location:../Inicio");
		}
		else
			header("Location:../Posts");
	}

	public function comentario($idPost)
	{
		$nombre = $this->input->post('nameComment');
		$correo = $this->input->post('mail');
		$comentario = $this->input->post('comments');
		$idComentario = $this->post->agregarComentarios($nombre, $correo, $comentario);
		$id = $this->post->agregarPostComentarios($idPost, $idComentario);

		//header("Location:../Inicio/mostrar/echo $idPost");

		if($id)
		{
			header("Location:../../Inicio/mostrar/$idPost");
		}
		else
			header("Location:../Posts");
	}
}

/* End of file Post */
/* Location: ./application/controllers/Post */