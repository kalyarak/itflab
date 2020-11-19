<?php
include "config.php";

$keyword = $_GET['keyword'];

$sql = "SELECT * FROM buy_product WHERE title LIKE '%{$keyword}%'";
$query = $db -> query($sql);

while($item = mysqli_fetch_array($query)){
    $data[] = $item;
}

include "files/search.php";