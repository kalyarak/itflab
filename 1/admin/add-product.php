<?php
include "../config.php";
$page_title = "Add New Product";
?>

<html>
<head><title>DSR</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="save-new-product.php" method="post">
        <input type="hidden" name="product-id"><br>
        <input type="text" name="title" id="title" placeholder="ชื่อสินค้า"><br>
        <input type="text" name="cover" id="cover" placeholder="รูปภาพสินค้า"><br>
        <textarea name="details" id="details" cols="30" row="10">
        </textarea><br>
        <input type="text" name="price" id="price" placeholder="ราคา"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>