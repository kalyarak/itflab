<?php
include "config.php";
if($_GET['buy_id']){
    $buy_id = $_GET['buy_id'];
}else{
    echo "buy-id not found";
    die();
}

$sql = "DELETE FROM buy_item WHERE buy_id = {$buy_id}";
$query = mysqli_query($db , $sql);

