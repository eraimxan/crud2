<?php
require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `product_id`='$product_id'");
$comments = mysqli_fetch_all($comments); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
</head>
<body>
<h2>Title: <?= $product['title'] ?></h2>
<h4>Price: <?= $product['price'] ?></h4>
<p>Description: <?= $product['description'] ?></p>

<hr size="2">
<form action="vendor/create_comment.php" method="post">
    <input type="hidden" name="product_id" value="<?= $product['id'] ?>"> 
    <textarea name="body"></textarea><br><br>
    <button type="submit">Add comment</button>
</form>
<hr size="2">
<h3>Comments</h3>
<ul>
    <?php
    foreach($comments as $comment){
        ?>
        <li><?= $comment[2] ?></li>
        <?php
    }
    ?>
</ul>

</body>
</html>