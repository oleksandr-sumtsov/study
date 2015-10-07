<?php
session_start();
$_SESSION['color'] = $_GET['color'];

header('Location: http://study/shop/shop.php');