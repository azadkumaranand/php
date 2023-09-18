<?php
function sum($a, $b){
    return $a + $b;
}
// $a + $b;
// $a + $b;

// $x = 4 + 5;
// $y = 10;
// $x = $x + $y;
echo sum(4, 8);
echo "<br>";
echo sum(7845, 451);

function greatUser($a){
    echo "<h1>Good envening ".$a."</h1>";
}

// echo "<h1>Good envening everyone</h1>";
// echo "<h1>Good envening everyone</h1>";
// echo "<h1>Good envening everyone</h1>";
greatUser("Azad");
greatUser("Raju");
greatUser("Sandhya");

// rand(10, 1010)

function restrictUser($x){
    // if($x == "Azad"){
    //     echo "<h4>Hello ".$x." You are not allowed to access this website</h4>";
    // }else{
    //     echo "<h4>Hello ".$x." You are free to access this website</h4>";
    // }
    if($x == "Azad"){
       return -1;
    }else{
        return 1;
    }
}
// if(restrictUser("Azad") == -1){
//     echo "<h4>Hello ".$x." You are not allowed to access this website</h4>";
// }
// if(restrictUser() == 1){
//     echo "<h4>Hello ".$x." You are free to access this website</h4>";
// }
echo restrictUser("Azad");
echo "<br>";
echo restrictUser("Raju");
echo restrictUser("Sandhya");
restrictUser("Shangun");
restrictUser("Rahul");
// echo $_SERVER['PHP_SELF'];
?>