<?php
class Product
{
    protected $_price;
    protected $_name;
    protected $_color;

    public function __construct($name, $price, $color)
    {
        $this->_price = $price;
        $this->_name = $name;
        $this->_color = $color;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function getPrice()
    {
        return $this->_price;
    }
}