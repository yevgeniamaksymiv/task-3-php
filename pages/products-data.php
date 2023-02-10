<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
session_start();

if (isset($_GET['name']) && isset($_GET['price'])) {
    $_SESSION['names'][] = $_GET['name'];
    $_SESSION['prices'][] = $_GET['price'];
    echo 'The product has been successfully added to cart . <br />';
}
?>

<a href="products.php">Back to shopping</a>
<a href="cart.php">Go to cart</a>
</body>
</html>

