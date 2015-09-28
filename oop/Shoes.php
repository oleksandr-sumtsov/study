<?php
class Shoes
{
    protected $_size;
    protected $_color;
    protected $_speed = 0;

    public function __construct($size, $color)
    {
        $this->_color = $color;
        $this->_size = $size;
    }

    public function go()
    {
        $this->_speed = 5;
    }

    public function stop()
    {
        $this->_speed = 0;
    }

    public function printSpeed()
    {
        echo 'Speed is: ' . $this->_speed;
    }

    //Setter
    public function setSize($size)
    {
        $this->_size = $size;
    }
    //Setter
    public function setColor($color)
    {
        $this->_color = $color;
    }

    //Getter
    public function getSize()
    {
        return $this->_size;
    }

    //Getter
    public function getColor()
    {
        return $this->_color;
    }
}