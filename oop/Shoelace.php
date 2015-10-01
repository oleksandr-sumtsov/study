<?php
class Shoelace extends Shoes
{
    protected $_color;
    protected $_length;

    public function __construct($color, $length)
    {
        $this->_color = $color;
        $this->_length = $length;
    }

    public function getLength()
    {
        return $this->_length;
    }
}