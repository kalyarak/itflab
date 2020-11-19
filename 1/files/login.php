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
        <h1>เข้าสู่ระบบ</h1>
        <form action="do-login.php" method="post">
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
        <div class="admin-login">
            <a href="admin-login.php">
                เข้าสู่ระบบเฉพาะ admin
            </a>
        </div>
    </div>
    <div class="register-item">
        <h1>สมัครสมาชิก</h1>
        <form action="do-register.php" method="post">
            <p>
                <span>Name</span><br>
                <input type="text" name="fullname" class="log-input">
            </p>
            <p>
                <span>Phone</span><br>
                <input type="text" name="phone" class="log-input">
            </p>
            <p>
                <span>Email</span><br>
                <input type="text" name="email" class="log-input">
            </p>
            <p>
                <span>Password</span><br>
                <input type="password" name="password" class="log-input">
            </p>
            <p class="log-item-button">
                <button type="submit" class="log-button">สมัครสมาชิก</button>
            </p>
        </form>
    </div>
</div>


<?php
    include('acc/end.php');
?>
</body>
</html>