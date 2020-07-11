<?php
include 'includes/class-autoload.inc.php';
Session::init();


if(!isset($_SESSION['email'])) {
    die("You're not logged in. Please go back on <a href='login.php'>log in</a> page."); 
}

echo $_SESSION['email'];

?>

<form action="includes/logout.inc.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>

