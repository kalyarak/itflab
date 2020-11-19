<?php
include "../config.php";
$item_id = $_GET['item_id'];
$item = false;
$sql = "SELECT * FROM buy_product WHERE item_id = '{$item_id}'";
$query = mysqli_query($db , $sql);

if(mysqli_num_rows($query) > 0){
    $item = mysqli_fetch_array($query);
}

echo "<a href=\"index.php\">Back</a>";
?>
<html>
<head><title>DSR</title>
</head>
<body>
<h1>Edit Product</h1>
    <form action="save-product.php" method="post">
        <input type="hidden" name="product-id" value="<?=$item['item_id'];?>"><br>
        <input type="text" name="title" id="title" placeholder="ชื่อสินค้า" value="<?=$item['title'];?>"><br>
        <input type="text" name="cover" id="cover" placeholder="รูปภาพสินค้า" value="<?=$item['cover'];?>"><br>
        <textarea name="details" id="details" cols="30" row="10" value="<?=$item['details'];?>">
        </textarea><br>
        <input type="text" name="price" id="price" placeholder="ราคา" value="<?=$item['price'];?>"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
