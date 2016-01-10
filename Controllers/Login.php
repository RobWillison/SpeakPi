<?php


class Login implements GenericController
{

    public function post()
    {

    }

    public function get()
    {
        include '../Pages/LoginPage.tpl.php';
    }
}