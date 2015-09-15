<?php
require_once 'const.php';

if ($_GET['name'] == '') {
    echo 'Вы нихера не ввели.';
} else {
    if (file_exists(FILE_NAME)) {
        $file = fopen(FILE_NAME, 'a');
        fwrite($file, $_GET['name'] . "\n");
        fclose($file);
    } else {
        echo 'Нет файла для записи.';
    }
} ?>
<a href="show_users.php">Покажи всех пользователей</a>