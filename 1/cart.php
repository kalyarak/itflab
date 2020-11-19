<?php
include "config.php";

if(!isset($_COOKIE['user_logged_in'])){
    header("location:login.php");
}

$user_id = $_COOKIE['user_logged_in'];
$cart_query = mysqli_query($db , "SELECT * FROM buy_item WHERE user_id = {$user_id}");
$total_price = 0;

while ($item = mysqli_fetch_array($cart_query)){
$item_query = mysqli_query($db , "SELECT * FROM buy_product WHERE item_id = {$item['item_id']}");

$current_item = mysqli_fetch_array($item_query);
$current_item['buy_id'] = $item['buy_id'];

$total_price += $current_item['price'];

$cart_item[] = $current_item;
}

if(isset($_COOKIE['order_confirm'])){
    include "files/send.php";
}else{
    include "files/cart.php";
}