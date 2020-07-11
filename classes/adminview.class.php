<?php

    class AdminView extends Admin {

        public function validateAdmin($email, $pass) {
            $result = $this->getAdmin($email);
            if($email == $result[0]['admin_email']) {
                if(password_verify($pass, $result[0]['admin_password'])) {
                    Session::init();
                    Session::set('admin_email', $email);
                    header("location: ../admin.php");
                } else {
                    echo "Wrong credentials.";
                }
            } else {
                echo "Wrong credentials.";
            }
        }

    }