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
<div class="details">
    <div class="details-item">
        <h1 class="a"><?=$item['title'];?></h1>
        <img src="imgs/<?=$item['cover'];?>" class="details-img">
        <p><?=$item['details'];?></p>
        <h2><?=$item['price'];?></h2>
        <div class="details-item-button">
            <a href="add-item.php?item_id=<?=$item['item_id'];?>" class="details-button">
                หยิบลงตะกร้า
            </a>            
        </div>

    </div>
</div>
<?php
    include('acc/end.php');
?>
</body>
</html>