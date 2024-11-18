<?php
class HomeController
{
    public function dashboad()
    {
        $home = new HomeModels();
        include 'views/users/index.php';
    }
}