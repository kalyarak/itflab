<html>
<head>  
      <?php
    include('acc/header.php');
?>
</head>
<body class="body">
<?php
    include('acc/head.php');
?>
<div class="mylogin">
    <div class="login-item">
        <h1>เข้าสู่ระบบ admin</h1>
        <form action="admin/admin-do-login.php" method="post">
            <p>
                <span>Email</span><br>
                <input type="text" name="email" class="log-input">
            </p>
            <p>
                <span>Password</span><br>
                <input type="password" name="password" class="log-input">
            </p>
            <p class="log-item-button">
                <button type="submit" class="log-button">เข้าสู่ระบบ</button>
            </p>
        </form>
    </div>
</div>
<?php
    include('acc/end.php');
?>
</body>
</html>