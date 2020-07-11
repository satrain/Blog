<?php

class Session {

    public static function init() {
       session_start();
    }

    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }
    
    public static function isSet() {
        if(isset($_SESSION['email'])) {
            header("location: loggedin.php");
        }
    }

    public static function isSetAdmin() {
        if(isset($_SESSION['admin_email'])) {
            header("location: admin.php");
        }
    }

    public static function isAuthorized() {
        if(!isset($_SESSION['admin_email'])) {
            // ReLocate it on notauthorized.php page
            die("You're not authorized to access this page.");
        }
    }

    public static function adminDestroy() {
            session_unset();
            session_destroy();
            header("location: ../admin-login.php");
    }

    public static function destroy() {
        session_unset();
        session_destroy();
        header("location: ../login.php");
    }
    
}