<?php
echo "<h1>Abstract Class</h1>";
abstract class shape {
    public $lenght;
    public $wedth;
    public $radius;
    abstract protected function area($radius);
    public function tellAboutShape($name){
        echo "<h1>".$name."</h1>";
    }
}
class Circle extends shape {
    public function area($radius){
        return 3.14*$radius*$radius;
    }
}
$circleArea = new Circle();
echo "<h1>".$circleArea->area(7)."</h1>";

?>