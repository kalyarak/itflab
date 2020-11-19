<?php
include "../config.php";
$page_title = "Product Admin";

$sql = "SELECT * FROM buy_product ORDER BY item_id DESC";
$query = $db -> query($sql);

while($row = mysqli_fetch_array($query)){
    $products[] = $row;
}

$sql = "SELECT * FROM buy_users ORDER BY user_id DESC";
$query = $db -> query($sql);

while($row = mysqli_fetch_array($query)){
    $users[] = $row;
}
?>

<html>
<head><title>DSR</title>
</head>
<body>
<h1>แก้ไขสินค้า</h1>
<a href="add-product.php">add</a>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>ชื่อสินค้า</th>
            <th>รูป</th>
            <th>รายละเอียด</th>
            <th>ราคา</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product):?>
        <tr>
            <td><?=$product['title'];?></td>
            <td><?=$product['cover'];?></td>
            <td><?=$product['details'];?></td>
            <td><?=$product['price'];?></td>
            <td>
                <a href="edit-product.php?item_id=<?=$product['item_id'];?>">edit</a>
            </td>
            <td>
                <a href="delete-product.php?item_id=<?=$product['item_id'];?>">delete</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<h1>แก้ไขผู้ใช้</h1>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>อีเมล</th>
            <th>รหัสผ่าน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user):?>
        <tr>
            <td><?=$user['email'];?></td>
            <td><?=$user['password'];?></td>
            <td><?=$user['fullname'];?></td>
            <td><?=$user['phone'];?></td>
            <td>
                <a href="edit-user.php?user_id=<?=$user['user_id'];?>">edit</a>
            </td>
            <td>
                <a href="delete-user.php?user_id=<?=$user['user_id'];?>">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
