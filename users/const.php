<?php
const FILE_NAME = 'users.txt';
const PATH = 'http://study/users/';
function getUsersFromFile()
{
    if (!file_exists(FILE_NAME)) {
        $file = fopen(FILE_NAME, 'w');
        fclose($file);
    }

    $file = fopen(FILE_NAME, 'r');
    $users = '';
    while ($line = fgets($file)) {
        $users .= $line;
    }
    fclose($file);
    if ($users == '') {
        return array();
    } else {
        $users = unserialize($users);
        if (!$users) {
            return array();
        } else {
            return $users;
        }
    }

}

function saveUsersToFile($users)
{
    $users = serialize($users);
    $file = fopen(FILE_NAME, 'w');
    fwrite($file, $users);
    fclose($file);
}