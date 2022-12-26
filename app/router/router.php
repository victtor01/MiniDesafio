<?php

//executar essa função caso seja uma rota exata
function exactMatchUri($uri, $routes)
{
    return (array_key_exists($uri, $routes)) ? [$uri => $routes[$uri]] : [];
}
//funcao para caso a rota seja não exata
function regularExpressMatchUri($uri, $routes)
{
    return array_filter
    (
        $routes,
        function($value) use ($uri)
        {
            $regex = str_replace('/','\/', ltrim($value , '/'));
            return preg_match("/^$regex$/", ltrim($uri, '/'));
        },
        ARRAY_FILTER_USE_KEY
    );
}

function params($uri, $matchedUri)
{
    if(! empty($matchedUri))
    {
        $matchedToGetParams = array_keys($matchedUri)[0];
        return $params = array_diff
        (
            $uri, # user 5 name victor
            explode('/', ltrim($matchedToGetParams, characters: '/')) # user [0-9] name [a-z]
        );
    }
    return [];
}

function formatParams($uri, $params)
{
    $paramsData = [];
    foreach($params as $index => $param)
    {
        $paramsData[$uri[$index - 1]] = $param;
    }
    return $paramsData;
}

function router()
{
    $routes =  require 'routes.php';
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    $uri = parse_url($_SERVER['REQUEST_URI'], component: PHP_URL_PATH);
    #É uma rota exata?
    $matchedUri = exactMatchUri($uri, $routes[$requestMethod]);
    #se não for uma rota exata:
    $params = [];
    if(empty($matchedUri))
    {
        $matchedUri = regularExpressMatchUri($uri, $routes[$requestMethod]);
        $uri = explode('/', ltrim($uri, '/'));
        $params = params($uri, $matchedUri);
        $params = formatParams($uri, $params);
    }
    #caso seja uma rota exata:
    if(!empty($matchedUri))
    {
        return controller($matchedUri, $params);
    }

    throw new Exception('Algo deu errado (rota)');
}
