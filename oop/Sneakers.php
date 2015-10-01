<?php
class Sneakers extends Shoes
{
    /** @var  Shoelace */
    protected $_shoelace;

    public function __construct($size, $color, $shoelace)
    {
        $this->_shoelace = $shoelace;
        parent::__construct($size, $color);
    }

    public function run()
    {
        $this->_speed = 20;
    }

    public function getShoelaceLength()
    {
        $this->_shoelace->getLength();
    }
}