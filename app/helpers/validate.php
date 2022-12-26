<?php 

function validate()
{
    if(! isset( $_SESSION['id'] ))
    {
        session_start();
    }
}