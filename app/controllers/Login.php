<?php

namespace app\controllers;

use mysqli_result;

class Login
{
    public function index()
    {
        return 
        [
            'view' => 'login.php',
            'data' =>
            [
                'title' => 'Login'
            ]
        ];
    }

    public function login()
    {
        $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);

        $user = findby('users', 'email', "$email");

        if($user < 1)
        {
            return redirect('/login');
            die();
        }

        if(! password_verify($senha , $user['senha']))
        {
            return redirect('/login');
            die();
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];

        redirect('/user');
        die();

        /* if(password_verify($senha , $hash))
        {
            $_SESSION['id'] = $usuario['id_funcionario']; 
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['cargo'] = $usuario['cargo'];
            header('Location: ' . $this->link_painel);
            die();
        }   
        else{
            header('Location: ../login.html');
            die();
        } */

    }

}