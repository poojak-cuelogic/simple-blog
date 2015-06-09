<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Posts_Mdl extends CI_Model {

	public function getAllPosts() {	
		return $this->db
					->select('post.*, users.name as authorName, users.email')
					->join('users', 'post.authorId = users.userId')
					->get('post')
					->result_array();
	}
	
	public function getPost($postId) {
		return $this->db
					->select('post.*, users.name as authorName, users.email')
					->join('users', 'post.authorId = users.userId')
					->where('post.postId', $postId)
					->get('post')
					->row_array();
	}
	
}
	
