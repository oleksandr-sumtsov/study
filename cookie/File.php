<?php
class File
{
    /** Ресурс для работы с файлом для чтения */
    protected $_fileForRead;

    /** Ресурс для работы с файлом для записи */
    protected $_fileForWrite;

    /** Имя файла */
    protected $_fileName;

    /** Конструктор */
    public function __construct($fileName)
    {
        $this->_checkIsFileExists($fileName);
        $this->_fileName = $fileName;
    }

    /** Проверяет существует ли файл, если нет, создаёт новый */
    protected function _checkIsFileExists($fileName)
    {
        if(!file_exists($fileName)) {
            $file = fopen($fileName, 'w');
            fclose($file);
        }
    }

    /** Проверяет открыт ли файл для записи, если нет, то открывает и возвращает ресурс для записи
     * если открыт, то просто возвращет ресурс для записи */
    protected function _getFileResourceForWrite()
    {

        if (is_null($this->_fileForWrite)) {
            $this->_fileForWrite = fopen($this->_fileName, 'w');
        }

        return $this->_fileForWrite;
    }

    /** Записыват в файл */
    public function writeToFile($content)
    {
        $file = $this->_getFileResourceForWrite();
        fwrite($file, $content);
    }

    /** Проверяет открыт ли файл для чтения, если нет, то открывает и возвращает ресурс для чтения
     * если открыт, то просто возвращет ресурс для чтения */
    protected function _getFileResourceForRead()
    {
        if (is_null($this->_fileForRead)) {
            $this->_fileForRead = fopen($this->_fileName, 'r');
        }

        return $this->_fileForRead;
    }

    /** Читает из файла и возвращет результат чтения */
    public function readFromFile()
    {
        $file = $this->_getFileResourceForRead();
        $result = '';
        while ($line = fgets($file)) {
            $result .= $line;
        }

        return $result;
    }

    public function __destruct()
    {
        if (!is_null($this->_fileForRead)) {
            fclose($this->_fileForRead);
        }

        if (!is_null($this->_fileForWrite)) {
            fclose($this->_fileForWrite);
        }
    }

}