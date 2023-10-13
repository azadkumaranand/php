<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "phptutorial";

// $conn = new mysqli(serverName, UserName, Password, databasename)

$conn = new mysqli($server, $username, $password, $dbname);

// echo "<pre>";
// print_r($conn);
// echo "</pre>";
// echo $conn->connect_error;

if(empty($conn->connect_error)){
    echo "<h1>Connection successfull!</h1>";
}else{
    echo "<h1>Something went wrong!</h1>";
}


$sql = "SELECT * FROM users";
$result = $conn->query($sql);
var_dump($result);
// $row = $result->fetch_assoc();
$rows = $result->num_rows;

// for($i=1; $i<=$result->num_rows; $i++){
//     $rows = $result->fetch_assoc();
//     echo "<h1>".$rows['name']."</h1>";
// }

while($rows>0){
    $row = $result->fetch_assoc();
    echo "<h1>".$row['email']."</h1>";
    $rows--;
}

// echo "<h1>".$row['name']."</h1>";

$sql = "INSERT INTO users (`name`, `phone`, `email`, `sbuject`, `message`) VALUES (76545, 'jygjghjg', 'ayush@gamil.com', 'dlkfjlkaj', 'Hello ayush')";
$result = $conn->query($sql);
var_dump($result);

//query for update update

$sqlQuery = "UPDATE users SET name='arushi', email = 'arushi@gmail.com', sbuject = 'Hello arushi', message='you are doing great' WHERE email = 'azad@gmail.com'";
$result = $conn->query($sqlQuery);
var_dump($result);
?>
,  subject = 'Hello arushi', message='you are doing great' 