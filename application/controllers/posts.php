<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
	
	public function __Construct() {
		parent::__Construct();
		$this->load->model('posts_mdl');
		$this->load->model('comments_mdl');
	}

	public function index() {
		$data['posts'] = $this->posts_mdl->getAllPosts();
		$this->load->view('post/list', $data);
	}
	
	public function details($postId) {
		if(!empty($postId)) {
			$data['post'] = $this->posts_mdl->getPost($postId);
			$data['post']['comments'] = $this->comments_mdl->getAllCommentsForPost($postId);
			$this->load->view('post/details', $data);
		}
	}
}


