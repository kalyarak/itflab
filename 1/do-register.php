<?php
include "config.php";
include "functions.php";

$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

$register = false;

if($email && $password && $fullname && $phone){
$sql = "INSERT INTO buy_users (email , password ,fullname , phone) VALUE ('{$email}' , '{$password}' , '{$fullname}' , '{$phone}')";
$query = mysqli_query($db , $sql);

    if($query){
        $register = true;
    }
}
?>
<center><a href="login.php">สมัครสมาชิกสำเร็จแล้ว กรุณาเข้าสู่ระบบ</a></center>
