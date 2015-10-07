<?php
require_once 'classes/Product.php';
session_start();
$product = new Product($_GET['name'], $_GET['price'], $_GET['color']);
$_SESSION['products_cart'][] = $product;

header('Location: http://study/shop/shop.php');