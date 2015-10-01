<?php
require_once 'User.php';

$user = new User();
$user->login($_POST['email'], $_POST['password']);
header('Location: http://study/cookie/');
