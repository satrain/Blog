<?php
session_start();

include 'includes/class-autoload.inc.php';

Session::isSet();

$signUpForm = new SignUpForm();
$signUpForm->getSignUpForm();

