<?php
include "../config.php";
if($_GET['user_id']){
    $user_id = $_GET['user_id'];
}else{
    echo "user-id not found";
    die();
}

$sql = "DELETE FROM buy_users WHERE user_id = {$user_id}";
$query = mysqli_query($db , $sql);

echo "<a href=\"index.php\">Back</a>";