<?php

function connect()
{
    try {
        return new mysqli (LOCAL, 'root', 'root', 'BDDESAFIO');
    } catch (\Throwable $th) {
        new Exception('Erro ao conectar ao banco de dados');
    }
}