<?php 

class PostsContr extends Posts {
    
    public function createPost($postAuthor, $postHeading, $postBody, $postCategory) {
        $this->setPost($postAuthor, $postHeading, $postBody, $postCategory);
    }

}