<?php
include('class-autoload.inc.php');

$postCount = $_POST['postNewCount'];

$fetchObj = new PostsView();
$fetchObj->loadRestPostsLimit($postCount);
