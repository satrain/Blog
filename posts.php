<?php
    include 'includes/class-autoload.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var postCount = 3;
            $("button").click(function() {
                postCount = postCount + 2;
                $("#posts").load("includes/load-posts.inc.php", {
                    postNewCount: postCount
                });
            });
        });
    </script>
</head>
<body>
    <div id="posts">
        <?php
            $getPostsObj = new PostsView();
            $getPostsObj->loadFewPostsLimit('3');
        ?>
    </div>
    <button>Show more posts</button>
</body>
</html>