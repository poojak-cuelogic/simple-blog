<?php

class Post {
	
	private $id;
	private $title;
	private $category;
	private $body;
	private $authorId;
	private $date;
	
	public 	$CI;
				
	public function __Construct($postTitle=NULL, $postCategory=NULL, $postBody=NULL, $postAuthorId=NULL, $postDate=NULL) {
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
	
	public function createPost() {
		
			
	}
	
	public static function getAllPosts() {

	}
	
	
	
	
}
?>
