<?php
include "../config.php";
if($_GET['item_id']){
    $item_id = $_GET['item_id'];
}else{
    echo "item-id not found";
    die();
}

$sql = "DELETE FROM buy_product WHERE item_id = {$item_id}";
$query = mysqli_query($db , $sql);

echo "<a href=\"index.php\">Back</a>";