<?php

class SignUpForm {

    public $signUpForm;

    public function getSignUpForm() {
        $this->signUpForm = "
        <form action='includes/signup.inc.php' method='post'>
            <input type='text' name='user_firstname' placeholder='Type your firstname' required><br>
            <input type='text' name='user_lastname' placeholder='Type your lastname' required><br>
            <input type='email' name='user_email' placeholder='Type your email' required><br>
            <input type='password' name='user_pass' placeholder='Type your password' required><br>
            <input type='submit' name='signup' value='Sign up'>
        </form>
        ";
        echo $this->signUpForm;
    }

}