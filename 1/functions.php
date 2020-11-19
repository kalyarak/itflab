<?php
function is_logged_in(){
    $logged_in = false;

    if(isset($_COOKIE['user_logged_in'])){
        $logged_in = true;
    }
    return $logged_in;
}

function is_admin_logged_in(){
    $logged_in = false;

    if(isset($_COOKIE['admin_logged_in'])){
        $logged_in = true;
    }
    return $logged_in;
}