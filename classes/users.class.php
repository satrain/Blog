<?php

class Users extends Dbh {

    protected function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "First name: " . $row['user_firstname'] . "<br>";
            echo "Last name: " . $row['user_lastname'] . "<br>";
            echo "Email: " . $row['user_email'] . "<br>";
            echo "Password" . $row['user_password'] . "<br>";
        }
    }

    protected function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($firstName, $lastName, $email, $pass) {
        $userRegisteredDate = date("Y-m-d");
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_email, user_password, user_registered_date) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$firstName, $lastName, $email, $pass, $userRegisteredDate]);
        if($result) {
            echo "Successfully registered.";
        }
        else {
            echo "There was an error" . $stmt->errorCode();
        }
    }

}
