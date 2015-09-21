<?php
require_once 'const.php';
$users = getUsersFromFile();
$users[] = $_POST;
saveUsersToFile($users);

header('Location: ' . PATH . 'success.html');
