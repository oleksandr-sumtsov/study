<?php
require_once 'const.php';
require_once 'File.php';
class User
{
    /** Объект для работы с файлом */
    protected $_file;

    public function register($name, $surname, $email, $password)
    {
        $users = $this->_getUsersFromFile();
        $users[] = array('name' => $name, 'surname' => $surname, 'email' => $email, 'password' => $password);
        $this->_saveUsersToFile($users);
    }

    protected function _getUsersFromFile()
    {
        $users = $this->_getFileObject()->readFromFile();
        $users = unserialize($users);
        if (!$users) {
            $users = array();
        }

        return $users;
    }

    /**
     * @return File
     */
    protected function _getFileObject()
    {
        if (is_null($this->_file)) {
            $this->_file = new File(FILE_PATH);
        }

        return $this->_file;
    }

    protected function _saveUsersToFile($users)
    {
        $users = serialize($users);
        $this->_getFileObject()->writeToFile($users);
    }

    public function login($email, $password)
    {
        $users = $this->_getUsersFromFile();
        foreach ($users as $user)
        {
            if ($user['email'] == $email) {
                if ($user['password'] == $password) {
                    setcookie('logged', '1', time() + 3600);
                }
            }
        }
    }
}