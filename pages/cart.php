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

  foreach ($_SESSION['names'] as $name) {
    echo $name . '<br/>';
}
echo 'Total price: ' . array_sum($_SESSION['prices']) . ' $';
  ?>
</body>
</html>