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
<div class="product">
    <?php foreach ( $data as $item): ?>
    <div class="product-item">
        <img src="imgs/<?=$item['cover'];?>" class="product-img">
        <p><?=$item['title'];?></p>
        <h2><?=$item['price'];?></h2>
        <a href="details.php?item_id=<?=$item['item_id'];?>" class="product-button">
            รายละเอียดเพิ่มเติม
        </a>
    </div>
    <?php endforeach; ?>
</div>
<?php
    include('acc/end.php');
?>
</body>
</html>