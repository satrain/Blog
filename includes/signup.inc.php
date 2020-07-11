<?php
Session::init();
include 'class-autoload.inc.php';

if(isset($_POST['signup'])) {
    $firstName = $_POST['user_firstname'];
    $lastName = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];

    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $signupObject = new UsersContr();
    $signupObject->createUser($firstName, $lastName, $email, $hash_pass);

    Session::set('email', $email);
    header("location: ../loggedin.php");
}