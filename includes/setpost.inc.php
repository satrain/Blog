<?php 
include 'class-autoload.inc.php'; 


if(isset($_POST['setPost'])) {
    $postAuthor = $_POST['post_author'];
    $postHeading = $_POST['post_heading'];
    $postBody = $_POST['post_body'];
    $postCategory = $_POST['post_category'];
    $postDate = date("Y-m-d");

    $setPostObj = new PostsContr();
    $setPostObj->createPost($postAuthor, $postHeading, $postBody, $postCategory, $postDate);
}
?>