<?php 

function protect( &$str ) {

    if( !is_array( $str ) ) 
    {                      
        $str = preg_replace( '/(from|select|insert|delete|where|drop|union|order|update|database)/i', '', $str );
        $str = preg_replace( '/(&lt;|<)?script(\/?(&gt;|>(.*))?)/i', '', $str );
        $tbl = get_html_translation_table( HTML_ENTITIES );
        $tbl = array_flip( $tbl );
        $str = addslashes( $str );
        $str = strip_tags( $str );
        return strtr( $str, $tbl );
    } 
    else 
    {
        return array_filter( $str, "protect" );
    }
}

function validatePassword($password)
{
    $password = protect($password);
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password)
{
    
}