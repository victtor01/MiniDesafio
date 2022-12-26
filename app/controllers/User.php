<?php

namespace app\controllers;

class User
{
    public function __construct()
    {
        validate();
        $this->id = $_SESSION['id'];
    }

    public function index($params)
    {

        return 
        [
            'view' => 'user.php',
            'data' =>
            [
                'title' => 'Home', 
                'user' => findby('users', 'id', $this->id)
            ]
        ];
    }

    public function logout()
    {
        validate();
        session_destroy();
        redirect('/');
        die();
    }
}