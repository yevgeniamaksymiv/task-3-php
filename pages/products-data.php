<?php
session_start();

if (isset($_GET['name']) && isset($_GET['price'])) {
    $_SESSION['names'][] = $_GET['name'];
    $_SESSION['prices'][] = $_GET['price'];
}

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'products.php';
header("Location: http://$host$uri/$extra");
exit;


