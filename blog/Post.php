<?php
class Post {
	
	private $id;
	private $title;
	private $category;
	private $body;
	private $authorId;
	private $date;
				
	public function __Construct($postId, $postTitle, $postCategory, $postBody, $postAuthorId, $postDate) {
		if(!empty($postId)) {
			$this->id = $postId;
		}
		
		if(!empty($postTitle)) {
			$this->title = $postTitle;
		}
		
		if(!empty($postCategory)) {
			$this->category = $postCategory;
		}
		
		if(!empty($postBody)) {
			$this->body = $postBody;
		}
		
		if(!empty($postAuthorId)) {
			$this->authorId = $postAuthorId;
		}
		
		if(!empty($postDate)) {
			$this->date = $postDate;
		}
	}
	
	private function setValidationRules() {
		$this->form_validation
					->set_rules('title', 'Title', 'trim|required|xss_clean')
					->set_rules('category', 'Category', 'trim|required|xss_clean|alpha')
					->set_rules('body', 'Post Body', 'required|xss_clean')
					->set_rules('authorId', 'Company Name', 'trim|required|xss_clean')
					->set_rules('date', 'Job Title', 'trim|required|xss_clean');	
	}
	
	public function createPost() {
		$this->load->library('form_validation');
		$this->setValidationRules();
		
			
	}
	
	
	
	
}
?>
