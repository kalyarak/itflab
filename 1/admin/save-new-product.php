<?php
include "../config.php";

$title = $_POST['title'];
$details = $_POST['details'];
$price = $_POST['price'];

$sql = "INSERT INTO buy_product (title , details , price ) VALUE '{$title}' , '{$details}' , '{$price}'";
$query = mysqli_query($db , $sql);

echo "<a href=\"index.php\">Back</a>";