<?php
class LoginController
{
    public function loginUser()
    {
        $home = new LoginModels();
        include 'views/users/login.php';
    }
}