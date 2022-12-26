<?php 

namespace app\controllers;

class Register
{
    public function index()
    {
        return 
        [
            'view' => 'register.php',
            'data' => 
            [
                'title' => 'Register'
            ]
        ];
    }

    public function toSave()
    {
        $nome = $_POST['nome'];
        $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);
        $senha = validatePassword($senha);
        return $res = insertIn('users', ['nome', 'email', 'senha'], ["$nome", "$email", "$senha"])
        ? redirect('/') : redirect('/login');
        
    }
}