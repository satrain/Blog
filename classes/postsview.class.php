<?php

class PostsView extends Posts {
    

    public function showPost($postAuthor) {
        $results = $this->getPost($postAuthor);
        echo "Author name: " . $results[0]['post_author'] . "<br>" . $results[0]['post_heading'];
    }

    public function showAllPosts() {
        $results = $this->getAllPosts();
    }

    public function loadFewPostsLimit($limitNum) {
        $results = $this->loadFewPosts($limitNum);
    }

    public function loadRestPostsLimit($postCount) {
        $results = $this->loadRestPosts($postCount);
    }
    
}