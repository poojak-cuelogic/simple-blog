<?php


class PostTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testPostCreation()
    {
		$postTitle = null;
		$postCategory = 'General';
		$postBody = 'Nunc id sapien vitae lacus vulputate pellentesque eget nec augue. Sed dignissim, sapien non lacinia feugiat, elit erat ultrices orci, eu aliquet dui risus vitae lectus. Curabitur tempor feugiat cursus. Praesent egestas urna dui, sit amet rutrum libero ullamcorper quis. Suspendisse porttitor vel odio non suscipit. Aenean non elementum sapien. Aenean mollis ligula ac augue scelerisque, ac commodo turpis iaculis. Vivamus suscipit dui interdum augue gravida mattis. Donec vehicula facilisis tellus, id maximus purus maximus in. Phasellus mi eros, gravida vel arcu eu, placerat facilisis mi.';
		$postAuthorId = 1;
		$postDate = time();
		
		$objPost = new Post($postTitle, $postCategory, $postBody, $postAuthorId, $postDate);
		$objPost->createPost();
    }

}
