<?php
require_once 'const.php';

if (file_exists(FILE_NAME)) {
    $file = fopen(FILE_NAME, 'r');
    while ($text = fgets($file)) {
        echo $text . '<br>';
    };
    fclose($file);
} else {
    echo 'Нет файла для чтения.';
}