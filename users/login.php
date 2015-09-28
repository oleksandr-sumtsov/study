<?php
require_once 'const.php';
$login = $_POST['login'];
$password = $_POST['password'];

$users = getUsersFromFile();

foreach ($users as $user) {
    if ($user['login'] == $login) {
        if ($user['password'] == $password) {
            header('Location: ' . PATH . 'login-success.html');
            die;
        } else {
            header('Location: ' . PATH . 'password-fail.html');
            die;
        }
    }
}
header('Location: ' . PATH . 'no-user.html');