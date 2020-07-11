<?php

class UsersContr extends Users {

    public function createUser($firstName, $lastName, $email, $pass) {
        $userRegisteredDate = date("Y-m-d");
        $this->setUser($firstName, $lastName, $email, $pass, $userRegisteredDate);
    }

}