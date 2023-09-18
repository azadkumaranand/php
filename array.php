<?php
// index array
$arr = array("Rahul", "Sumit", "Vedant", "Shagun", "Sandhya");

echo "<h1>".$arr[2]."</h1>";
//count menthod is used for finding length of array
echo "<h1>".count($arr)."</h1>";
$lengthOfArr = count($arr);
// for($x=0; $x<$lengthOfArr; $x++){
//     echo "<h1>".$arr[$x]."</h1>";
// }
foreach($arr as $name){
    echo "<h1>".$name."</h1>";
}
//associative array
$arrAssos = array("name"=>"Azad", "age"=>"30", "gender"=>"male");
// echo $arrAssos['gender'];
foreach($arrAssos as $key=>$name){
    echo "<h1>".$key."=>".$name."</h1>";
}


?>

<script>
    let arr = ["azad", "ponung", "khushi", "bansal"];
    arr.length;
</script>