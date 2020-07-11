<?php

class LoginForm {
    public $loginForm;

    public function getLoginForm() {
        $this->loginForm = "
            <form action='includes/login.inc.php' method='post'>
                <input type='email' name='login_email' placeholder='Type your email here'><br>
                <input type='password' name='login_pass' placeholder='Type your password here'><br>
                <input type='submit' name='login' value='Login'>
            </form>
        ";
        echo $this->loginForm;
    }
}