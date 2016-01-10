<?php
namespace Controllers;

class Login implements GenericController
{

    public function post()
    {
        if(isset($_POST['name'])) {
            $_SESSION['name'] = preg_replace("/[^A-Za-z]/", '', $_POST['name']);
            header("Refresh:0");
        }
    }

    public function get()
    {
        include __DIR__ . '/../Pages/LoginPage.tpl.php';
    }
}