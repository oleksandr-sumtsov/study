<?php
require_once 'User.php';

$user = new User();
$user->register($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);