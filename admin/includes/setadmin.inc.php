<?php
    include 'class-autoload.inc.php';
    Session::init();
    if(isset($_POST['setAdmin'])) {
        $adminFn = $_POST['admin_firstname'];
        $adminLn = $_POST['admin_lastname'];
        $adminEmail = $_POST['admin_email'];
        $adminPass = $_POST['admin_password'];
        $adminSq = $_POST['admin_security_question'];

        $hashPass = password_hash($adminPass, PASSWORD_DEFAULT);
        $hashSq = password_hash($adminSq, PASSWORD_DEFAULT);

        $adminObj = new AdminContr();
        $adminObj->createAdmin($adminFn, $adminLn, $adminEmail, $hashPass, $hashSq);
    }

?>
