<?php
//access session information
session_start();
echo "<h1>this is cookie file</h1>";
echo "<h1>Username => ".$_SESSION['fruits']."</h1>";


setcookie("ProductName", "Tshirt", time()+100, "/array.php");

?>