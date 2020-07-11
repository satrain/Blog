<?php 
    include 'includes/class-autoload.inc.php';
    Session::init();
    Session::isAuthorized();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form action="includes/setadmin.inc.php" method="post">
        <input type="text" name="admin_firstname" placeholder="Firstname"><br>
        <input type="text" name="admin_lastname" placeholder="Lastname"><br>
        <input type="email" name="admin_email" placeholder="Email"><br>
        <input type="password" name="admin_password" placeholder="Password"><br>
        <input type="text" name="admin_security_question" placeholder="Security Question"><br>
        <input type="submit" name="setAdmin" value="Create Admin">
    </form>
    <form action="includes/admin-logout.inc.php" method="post">
    <button name="logout">Logout</button>
    </form>
    <br>
    <hr>
    <br>
    <?php 
    /* SET POST */
        $postsForm = new PostsForm();
        $postsForm->getPostsForm();
    ?>

</body>
</html>
