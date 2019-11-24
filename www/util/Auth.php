<?php

class Auth
{
    public static function handleLogin()
    {
        session_start();
        //Kiem tra dang nhap
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: ../login');
            exit();
        }
    }
}
