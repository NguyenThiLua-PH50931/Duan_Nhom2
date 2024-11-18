<?php
class RegisterControllers
{
    public function registerUser()
    {
        $register = new RegisterModels();
        include 'views/users/register.php';
    }
}