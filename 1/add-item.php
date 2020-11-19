<?php
include "config.php";
include "functions.php";

if(!is_logged_in()){
    header("location:login.php");
}

$item_id = $_GET['item_id'];
$user_id = $_COOKIE['user_logged_in'];

$sql = "INSERT INTO buy_item (item_id , user_id) VALUE ('{$item_id}' , '{$user_id}')";
$query = $db -> query($sql);

if($query){
    header("location:cart.php");
}else{
    die("Unable to add item");
}
