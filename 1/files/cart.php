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
<div class="cart">
    <div class="cart-1">
        <?php foreach ($cart_item as $item ): ?>
        <div class="cart-10">
            <div class="cart-item">
                <img src="imgs/<?=$item['cover'];?>" class="cart-img">
            </div>
            <div class="cart-item">
                <h2 class="form"><?=$item['title'];?></h2>
                <div class="cart-item-1">
                    <h3>
                        <?=number_format($item['price']);?>
                    </h3>
                    <a href="remove-item.php?buy_id=<?=$item['buy_id'];?>" class="cart-button">ยกเลิก</a>
                </div>
            </div>            
        </div>

        <?php endforeach ;?>
    </div>
    <div class="cart-2">
        <h1>ราคาสินค้าทั้งหมด</h1>
        <p>
            <?=number_format($total_price);?>
        </p>
        <a href="send.php" class="cart-2-button">สั่งซื้อ</a>
    </div>
</div>
<?php
    include('acc/end.php');
?>
</body>
</html>