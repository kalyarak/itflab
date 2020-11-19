<?php
include "config.php";

$result = mysqli_query($db , "SELECT * FROM buy_product");
while($item = mysqli_fetch_array($result)){
    $data[] = $item;
}

include "files/all-product.php";