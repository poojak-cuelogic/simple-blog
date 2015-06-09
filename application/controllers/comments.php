<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {
	
	public function __Construct() {
		parent::__Construct();
		$this->load->model('comments_mdl');
	}

	public function insert() {
		$this->load->library('form_validation');
		$this->form_validation
					->set_rules('postId', 'Post Id', 'trim|required|xss_clean|numeric')
					->set_rules('guestName', 'Guest Name', 'trim|required|xss_clean|callback_valid_name|max_length[255]')
					->set_rules('comment', 'Comment', 'trim|required|xss_clean');
				
		if($this->form_validation->run()) {			
			if($this->comments_mdl->insertCommentForPost($_POST['postId'], $_POST['guestName'], $_POST['comment'])) {
				redirect('/posts/details/'.$_POST['postId']);		
			}
			else {
				
			}
		}
	}
	
	public function details($postId) {
		if(!empty($postId)) {
			$data['post'] = $this->posts_mdl->getPost($postId);
			$this->load->view('post/details', $data);
		}
	}
	
	public function valid_name($name) {
		$err_msg = 'The %s field contains invalid characters';
		if(preg_match("/[^a-zA-Z'-]+/",$name)){
			if(preg_match('#[0-9]#',$name)){
				$err_msg = 'The %s field may not contain numbers';
			}
			else if(strpos($name, " ") == true) {
				$err_msg = 'The %s field may not contain spaces';
			} 
			$this->form_validation->set_message('valid_name', $err_msg);	
			return false;
		}
		else {
			return true;	
		}
	}
}


