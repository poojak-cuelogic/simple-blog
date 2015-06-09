<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Comments_Mdl extends CI_Model {
	private $title   = '';
    private $content = '';
    private $date    = '';

	public function getAllCommentsForPost($postId) {	
		return $this->db
					->select('comments.*')
					->where('postId', $postId)
					->get('comments')
					->result_array();
	}
	
	public function insertCommentForPost($postId, $guestName, $comment) {
		return $this->db->insert('comments', array('postId' => $postId,'commentUserName' => $guestName, 'comment' => $comment));
	}
	
}
	
