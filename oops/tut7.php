<?php
//inteface box contain only abstract mthods
interface Animals{
   public function makeSound($sound);
}
interface Birds{
    public function fly($a);
}

class Dogs implements Animals, Birds{
    public function makeSound($sound){
        echo $sound;
    }
    public function fly($a){
        echo $a;
    }
}

$dog = new Dogs();
$dog->makeSound("Bark");
echo "<br>";
$dog->fly("No");


?>