<?php
include "../config.php";

if($_POST['item-id']){
    $item_id = $_POST['item-id'];
}else{
    echo "item-id not found";
    die();
}

$title = $_POST['title'];
$details = $_POST['details'];
$price = $_POST['price'];

$sql = "UPDATE buy_product SET title = '{$title}' , details = '{$details}' , price = '{$price}' WHERE item_id = {$item_id}" ;
$query = mysqli_query($db , $sql);

?>