<?php

function all($table, $field = '*')
{
    try 
    {
        $SQL = "SELECT {$field} FROM {$table}";
        $query = mysqli_query(connect(), $SQL);
        return $query->fetch_all();
    } 
    catch (\Throwable $th)
    {
        new Exception('Erro ao executar a query!');
    }
}

function findby($table, $field, $value, $fields = '*')
{
    try 
    {
        $SQL = "SELECT {$fields} FROM {$table} WHERE {$field} = '{$value}' LIMIT 1";
        $query = mysqli_query(connect(), $SQL);
        return $query->fetch_assoc();
    } 
    catch (\Throwable $th) {
        new Exception('Erro ao executar a query!');
    }
}

function formatParametersFields($fields, $values)
{
    $i = 0;
    $cont = count($values);
    while($i < $cont)
    {
        $values[$i] = "'" . $values[$i] . "' ";
        $i++;
    }

    $fields = implode(',' , $fields);
    $values = implode(',' , $values);
    return 
    [
        'fields' => $fields,
        'values' => $values
    ];
}

function insertIn($table, $fields, $values)
{
    try 
    {
        $params = formatParametersFields($fields, $values);
        $SQL = "INSERT INTO {$table} ({$params['fields']}) VALUES ({$params['values']})";
        return $query = mysqli_query(connect(), $SQL);
    } 
    catch (\Throwable $th) 
    {
        new Exception('Erro ao executar a query!');
    }
    
}