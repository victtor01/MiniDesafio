<?php  

require '../vendor/autoload.php';
require 'bootstrap.php';

/* require ROOT . '/app/database/connect.php'; */

try
{
   /*  $connect = connect(); */
    $data = router();

    if(! isset($data['view']))
    {
        throw new Exception('O indice não existe');
    }

    if(! file_exists(VIEWS . $data['view']))
    {
       throw new Exception('pasta não existe não existe');
    }

    if(isset($data['data']))
    {
        extract($data['data']);
    }
    

    $view = $data['view'];

    require VIEWS . 'master.php';
}

catch(Exception $e)
{
    var_dump($e->getMessage());
}