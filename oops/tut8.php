<?php
//trait box contain both abstract mthods and normal method
trait Animals{
//    abstract public function makeSound($sound);
   public function walk($w){
    echo $w;
   }
}
trait Birds{
    public function fly($a){
        echo $a;
    }
    public function fly1($a){
        echo $a;
    }
}

class Dogs{
    use Animals, Birds;
}

$dog = new Dogs();
$dog->walk("Runnnn..");
echo "<br>";
$dog->fly1("No");


?>