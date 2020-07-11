<?php
    include 'includes/class-autoload.inc.php';
    Session::init();
    Session::isSetAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        .input-error {
            box-shadow: 0 0 5px red;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form action="includes/getadmin.inc.php" method="post">
        <input id="login-email" type="email" name="admin_email" placeholder="Email">
        <input id="login-password" type="password" name="admin_password" placeholder="Password">
        <input id="login-submit" type="submit" name="adminLogin" value="Login">
        <p class="form-message"></p>
    </form>
</body>
</html>