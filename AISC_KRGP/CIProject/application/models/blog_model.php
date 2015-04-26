<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//Do your magic here
	}

	public function getPosts()
	{
		$sql ="SELECT POSTS.*, AUTHORS.username FROM POSTS, AUTHORS WHERE POSTS.author_id = AUTHORS.author_id ORDER BY date DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getTags()
	{
		$sql ="SELECT DISTINCT * FROM tags GROUP BY tag";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getUniquePost($idPost)
	{
		$sql ="SELECT POSTS.*, AUTHORS.username FROM POSTS, AUTHORS WHERE POSTS.author_id = AUTHORS.author_id && POSTS.post_id=$idPost";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getUniqueTags($idPost)
	{
		$sql ="SELECT * FROM tags WHERE tag_id IN (SELECT tag_id FROM posts_tags WHERE post_id=$idPost)";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getComments($idPost)
	{
		$sql ="SELECT * FROM comments WHERE comment_id IN (SELECT comment_id FROM posts_comments WHERE post_id=$idPost)";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */