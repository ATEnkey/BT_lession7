<html>
<?php
include_once('Shape.php');
class Cricle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePreimeter()
    {
        return pi() * $this->radius * 2;
    }
}
?>

</html>