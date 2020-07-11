<?php

    class Admin extends Dbh {

        protected function getAdmin($email) {
            $sql = "SELECT * FROM admins WHERE admin_email = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);

            $result = $stmt->fetchAll();

            if($stmt->rowCount() == 0) {
                die("Wrong credentials.");
            }
         
            return $result;

        }

        protected function setAdmin($adminFn, $adminLn, $adminEmail, $adminPass, $adminSq) {
            $sql = "INSERT INTO admins(admin_firstname, admin_lastname, admin_email, admin_password, admin_security_question) VALUES(?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$adminFn, $adminLn, $adminEmail, $adminPass, $adminSq]);
            if($result) {
                echo "Successfully registered.";
            } else {
                echo "There was an error creating admin";
            }
        }
    }

?>