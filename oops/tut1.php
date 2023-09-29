<?php
echo "<h1>Let's start opps!</h1>";

//class and object
//dry => don't repeat yourself
class Fruits{
    public $name;
    public $color;

    function setnameandcolor($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function getName(){
        return $this->name;
    }
    function getColor(){
        return $this->color;
    }

}

$banana = new Fruits();
$banana->setnameandcolor("Banana", "Yellow");
echo $banana->getColor();
$mango = new Fruits();
$mango->setnameandcolor("Mango", "Green");
echo $mango->getColor();

?>