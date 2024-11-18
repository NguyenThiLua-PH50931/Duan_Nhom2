<?php
class HomeController
{
    public function home()
    {
        $home = new HomeModels();
        include 'views/users/home.php';
    }
}