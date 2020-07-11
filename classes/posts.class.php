<?php

class Posts extends Dbh {

    protected function setPost($postAuthor, $postHeading, $postBody, $postCategory) {
        $postDate = date("Y-m-d");
        $sql = "INSERT INTO posts(post_author, post_heading, post_body, post_category, post_date) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$postAuthor, $postHeading, $postBody, $postCategory, $postDate]);
        if($result) {
            echo "Successfully added a post.";
        } 
        else {
            echo $stmt->errorCode();
        }
    }

    protected function getPost($postAuthor) {
        $sql = "SELECT * FROM posts WHERE post_author = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$postAuthor]);
        
        $results = $stmt->fetchAll();

        return $results;
    }

    protected function getAllPosts() {
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "Post author: " . $row['post_author'] . "<br>";
            echo "Post heading: " . $row['post_heading'] . "<br>";
            echo "Post body: " . $row['post_body'] . "<br>";
            echo "Post category: " . $row['post_category'] . "<br>";
            echo "Post date: " . $row['post_date'] . "<br>";
            echo "<hr>";
        }
        
    }

    protected function loadFewPosts($limitNum) {
        $sql = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $limitNum";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "<h1>" . $row['post_heading'] . "</h1>";
            echo "<p>" . $row['post_body'] . "</p>" . "<br>";
            echo $row['post_category'] . "<br>";
            echo $row['post_author'] . " " . $row['post_date'];
            echo "<hr>";
        }
    }

    protected function loadRestPosts($postCount) {
        $sql = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $postCount";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "<h1>" . $row['post_heading'] . "</h1>";
            echo "<p>" . $row['post_body'] . "</p>" . "<br>";
            echo $row['post_category'] . "<br>";
            echo $row['post_author'] . " " . $row['post_date'];
            echo "<hr>";
        }
    }

}