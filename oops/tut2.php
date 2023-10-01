<?php

class Fruits{
    public $name;
    public $color;
    public $weight;
    public $price;
    function __construct($name, $color, $weight, $price){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        $this->price = $price;
        // echo "<h1>constructor function called automatically when you careate object of this class</h1>";
    }
    function __destruct(){
        echo "hello guys all done";
    }

}

$banana = new Fruits("Banana", "Yellow", "100gm", 20);
echo "<h1>Fruit Name ".$banana->name." and Color is ".$banana->color." and weight is ".$banana->weight." ".$banana->price."</h1>";
$mango = new Fruits("Mango", "Green", "250gm", 15);
echo "<h1>Fruit Name ".$mango->name." and Color is ".$mango->color." and weight is ".$mango->weight."</h1>";
$apple = new Fruits("Apple", "Red", "225gm", 50);
echo "<h1>Fruit Name ".$apple->name." and Color is ".$apple->color." and weight is ".$apple->weight."</h1>";
?>