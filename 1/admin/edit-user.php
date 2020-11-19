<?php
include "../config.php";
$user_id = $_GET['user_id'];
$user = false;
$sql = "SELECT * FROM buy_users WHERE user_id = '{$user_id}'";
$query = mysqli_query($db , $sql);

if(mysqli_num_rows($query) > 0){
    $user = mysqli_fetch_array($query);
}

echo "<a href=\"index.php\">Back</a>";
?>
<html>
<head><title>DSR</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="save-user.php" method="post">
        <input type="hidden" name="user-id" value="<?=$user['user_id'];?>"><br>
        <input type="text" name="email" id="email" placeholder="อีเมล" value="<?=$user['email'];?>"><br>
        <input type="text" name="password" id="password" placeholder="รหัส" value="<?=$user['password'];?>"><br>
        <input type="text" name="fullname" id="fullname" placeholder="ชื่อ-นามสกุล" value="<?=$user['fullname'];?>"><br>
        <input type="text" name="phone" id="phone" placeholder="เบอร์โทรศัพท์" value="<?=$user['phone'];?>"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>