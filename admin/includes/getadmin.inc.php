<?php
    include 'class-autoload.inc.php';
    Session::init();

    if(isset($_POST['adminLogin'])) {
        $adminEmail = $_POST['admin_email'];
        $adminPass = $_POST['admin_password'];

        $adminObj = new AdminView();
        $adminObj->validateAdmin($adminEmail, $adminPass);
    } 

?>