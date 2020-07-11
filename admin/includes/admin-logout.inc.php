<?php  
include 'class-autoload.inc.php';
Session::init();

if(isset($_POST['logout'])) {
    Session::adminDestroy();
}

?>