<?php 

    class AdminContr extends Admin {

        public function createAdmin($adminFn, $adminLn, $adminEmail, $adminPass, $adminSq) {
            $this->setAdmin($adminFn, $adminLn, $adminEmail, $adminPass, $adminSq);
        }

    }