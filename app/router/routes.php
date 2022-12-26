<?php 

return [
    'POST' =>[
        '/register' => 'Register@tosave',
        '/login' => 'Login@login',
    ],
    'GET' => [
        '/' => 'Home@index',
        '/user' => 'User@index',
        '/user/logout' => 'User@logout',
        '/register' => 'register@index',
        '/login' => 'Login@index'
    ]
    
]; 