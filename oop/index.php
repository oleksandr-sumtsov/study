<?php
require_once 'Shoes.php';
require_once 'Sneakers.php';
require_once 'Shoelace.php';

$shoelace = new Shoelace(100, 'white');
$sneaker = new Sneakers(42, 'white', $shoelace);

$sneaker->run();
$sneaker->printSpeed();
