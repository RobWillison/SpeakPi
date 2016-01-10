<?php
namespace Controllers;

class Login implements GenericController
{

    public function post()
    {

    }

    public function get()
    {
        echo include '../Pages/LoginPage.tpl.php';
    }
}