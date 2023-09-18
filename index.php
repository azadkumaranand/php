<?php
    $x=9;
    $y=10.65;
    $y = "string";
    $x=56;
    echo $x;
    // $z;
    // $y = NULL;
    var_dump($y);
    $str = "";
    // -555564654;
    // 546465446;
    // 5244.245;
    $max_int_val = 49877777777777777777777777777;
    $x = "4";
    $y = 2.5;
    $z = $x * $y;
    
    echo "<br>";
    $result = is_int($x) == 1;
    echo ($result);
    echo "<br>";
    echo PHP_INT_MIN;
    echo "<br>";
    echo PHP_FLOAT_MIN;
    echo "<br>";
    echo var_dump($z);
    echo "<br>";
    var_dump($max_int_val);
    $str = '';
    $str = "Hello azad how are you";
    echo "<br>";
    echo "length of string ", strlen($str);
    echo "<br>";
    echo "number of words in str ", str_word_count($str);
    echo "<br>";
    echo "reverse of string ", strrev($str);
    echo "<br>";
    echo "position of how ", strpos($str, "how");
    echo "<br>";
    echo str_replace("azad", "aman", $str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <h1>Hello world this is my first server website!</h1>
    <script>
        let arr1 = [1, 2343,45443,34, "azad", {name: "gulshan", age: "21"}, ["az", 54]];
        // oops
        // typeof(arr1[2])
        typeof(arr1[4]) // => string
        let x;
        console.log(x)
        x = 5;
        //arr1[6][1]
        let obj1 = {name: "azad", age: 21, gender: ["male", "female"]}
        ojb1.name;
        obj1.age;
        obj1.gender[1];
    </script>
</body>
</html>