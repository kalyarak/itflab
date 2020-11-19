<?php
include "config.php";
include "functions.php";

$login = false;

$email = $_POST['email'];
$password = $_POST['password'];



if($email && $password){
    $sql = "SELECT user_id FROM buy_users WHERE email = '{$email}' AND password = '{$password}'";
    $query = mysqli_query($db , $sql);

    if($query && mysqli_num_rows($query) > 0){
        $user = mysqli_fetch_array($query);

        setcookie('user_logged_in' , $user['user_id']);

        $login = true;
    }else{
        $login = false;
    }
}
?>
<?php if($login) : ?>
<center><a href="index.php">เข้าสู่ระบบสำเร็จแล้ว</a></center>
<?php else : ?>
<center><a href="login.php">เข้าสู่ระบบไม่สำเร็จ โปรดตรวจสอบความถูกต้อง</a></center>
<?php endif ; ?>