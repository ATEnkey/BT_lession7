<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Cricle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br/>';
echo 'Circle perimeter: ' . $circle->calculatePreimeter() . '<br/>';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area : ' . $cylinder->calculateArea() . '<br/>';
echo 'Cylinder perimeter : ' . $cylinder->calculatePreimeter() . '<br/>';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle erea : ' . $rectangle->calculateArea() . '<br/>';
echo 'Rectangle perimeter : ' . $rectangle->calculatePerimater() . '<br/>';

$square = new square('Square 01', 4, 4, 4);
echo 'Square erea : ' . $square->calculateArea() . '<br/>';
echo 'Rectangle perimeter : ' . $square->calculatePerimater() . '<br/>';
