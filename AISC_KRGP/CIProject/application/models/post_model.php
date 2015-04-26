<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function agregarPost($titulo, $contenido)
	{
		$id = $this->session->userdata("idAuthor");
		$sql = "INSERT INTO POSTS(author_id, title, content, date)
				VALUES ('$id','".$titulo."','".$contenido."',current_timestamp)";
		$result = $this->db->query($sql);
		return $this->db->insert_id();
	}

	public function agregarTags($tags)
	{
		$sql = "INSERT INTO tags(tag) VALUES ('$tags')";
		$result = $this->db->query($sql);
		return $this->db->insert_id();
	}

	public function agregarPostTags($idPost, $idTags)
	{
		$sql = "INSERT INTO POSTS_TAGS(post_id, tag_id) VALUES ('".$idPost."','".$idTags."')";
		$result = $this->db->query($sql);
	}

	public function agregarComentarios($nombre, $correo, $comentario)
	{
		$sql = "INSERT INTO COMMENTS(NAME,COMMENT,EMAIL) VALUES ('".$nombre."', '".$comentario."', '".$correo."')";
		$result = $this->db->query($sql);
		return $this->db->insert_id();
	}

	public function agregarPostComentarios($idPost,$idComentario)
	{
		$sql = "INSERT INTO POSTS_COMMENTS(POST_ID, COMMENT_ID) VALUES ('".$idPost."', '".$idComentario."')";
		$result = $this->db->query($sql);
		return true;
	}
} 
/* End of file post_model.php */
/* Location: ./application/models/post_model.php */