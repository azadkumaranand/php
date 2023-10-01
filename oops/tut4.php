<?php
//inheritance

class Car{
   public $name;
   public $color;
   private $price;
   protected $weight;
   public function __construct($name, $color, $price, $weight){
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
    $this->weight = $weight;
   }
   function getWeight (){
    return $this->price;
   }
}

class BMW extends Car{
    public $maXpeed = "150kmph";
}

$bmw = new BMW("BMW", 'Black', "50lack", "1000kg");
echo "<h1>".$bmw->name."</h1>";
echo "<h1>".$bmw->getWeight()."</h1>";
echo "<h1>".$bmw->maXpeed."</h1>";

?>