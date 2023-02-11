<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Cart</h2>

  <?php
session_start();

if (isset($_SESSION['names']) && isset($_SESSION['prices'])) {

    foreach ($_SESSION['names'] as $name) {
        echo $name . '<br/>';
    }
    echo 'Total price: ' . array_sum($_SESSION['prices']) . ' $' . '<br/>';
} else {
    echo 'Cart is empty' . '<br/>';
}

echo '<a href="products.php">Back to shopping</a>';
?>
</body>
</html>