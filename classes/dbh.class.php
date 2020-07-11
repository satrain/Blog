<?php

    class Dbh {

        private $host;
        private $user;
        private $pass;
        private $dbName;

        protected function connect() {
            $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dns, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }

    }
