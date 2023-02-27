<html>
<?php
class shape
{
    public $name;
    public function __construct($name)
    {
        $this->$name = $name;
    }
    public function show()
    {
        return "Im a Shape. my name is $this->name";
    }
}
?>

</html>