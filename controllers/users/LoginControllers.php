<?php
class LoginController
{
    public function login()
    {
        $home = new LoginModels();
        include 'views/users/login.php';
    }
}