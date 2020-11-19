<?php
include "../config.php";

if($_POST['user-id']){
    $user_id = $_POST['user-id'];
}else{
    echo "user-id not found";
    die();
}

$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone']

$sql = "UPDATE buy_users SET email = '{$email}' , password = '{$password}' , fullname = '{$fulllname}' , phone ='{$phone}' WHERE user_id = {$user_id}";
$query = mysqli_query($db , $sql);

?>