<?php
include "../config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$login = false;

if($email && $password){
$sql = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
$query = mysqli_query($db , $sql);

    if($query && mysqli_num_rows($query) > 0){
        $admin = mysqli_fetch_array($query);

        setcookie('admin_logged_in' , $admin['admin_id']);

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