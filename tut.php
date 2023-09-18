<?php
echo "<h1>Hello world this is new file</h1>";

$x = "7845";
$z = 540.51;
echo "<br>";
echo var_dump((int)$z);
$y = (int)$x;
echo "<br>";
echo is_int($y);
echo "<br>";
echo var_dump($y);
echo "<br>";
echo max(84, 45, 23, 74, 95, 23);
echo "<br>";
echo min(84, 45, 23, 74, 95, 23);
echo "<br>";
echo abs($z);
echo "<br>";
echo sqrt($z);
echo "<br>";
echo round($z);
echo "<br>";
echo rand(1, 100);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let var1 = "7765431";
        console.log(typeof(var1));
        let var2 = parseInt(var1);
        console.log(typeof(var2));
    </script>
</body>
</html>