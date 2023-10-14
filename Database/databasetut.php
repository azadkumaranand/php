<?php
include "connect.php";
echo "<h1>Hello guys!</h1>";
// echo "<pre>";
// print_r($conn);
// echo "</pre>";

//insert sql query
/*
$sqlQuery = "INSERT INTO users (name, email, phone, sbuject, message) VALUES ('Koshik', 'koshik@gmail.acom', '95565854455', 'Hello koshik', 'You are doing great work')";
$result = $conn->query($sqlQuery);
var_dump($result);
*/
// get Last inserted id
/*
$lastInsertId = $conn->insert_id;
echo "<h1>Last insert id ".$lastInsertId."</h1>";
*/
//update sql query
$email = "badal@gmail.com";
$sqlQuery = "UPDATE users SET name='Badal', email='$email' WHERE name='arushi'";
echo $sqlQuery."<br>";
$result = $conn->query($sqlQuery);
var_dump($result);

//select sql query

$sqlQuery = "SELECT name, email FROM users";
$result = $conn->query($sqlQuery);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

/*fetch_assoc() functio fetch only current row*/

// echo "<pre>";
// print_r($result->fetch_assoc());
// echo "</pre>";
$rows = $result->num_rows;
while($rows>0){
    $row = $result->fetch_assoc();
    echo "<h1>".$row['name']."=>".$row['email']."</h1>";
    $rows--;
}