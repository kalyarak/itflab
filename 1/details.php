<?php
include "config.php";
$item_id = $_GET['item_id'];
$item = false;
$sql = "SELECT * FROM buy_product WHERE item_id = '{$item_id}'";
$query = mysqli_query($db , $sql);

if(mysqli_num_rows($query) > 0){
    $item = mysqli_fetch_array($query);
}
include "files/details.php";
?>
