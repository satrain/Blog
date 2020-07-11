<?php
include 'includes/class-autoload.inc.php';
Session::init(); 

Session::isSet();

$loginForm = new LoginForm();
$loginForm->getLoginForm();