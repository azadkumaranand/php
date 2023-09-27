<?php
//session and cookies are commonly used mechanism for storing information and managing state
// $_SESSION and $_COOKIE
//session store their information on server
//cookie store their information on user brower
//session is more secure than cookie

// Q. How to create a session
session_start();
$username = "azadkumar";
$GLOBALS['username'];

$_SESSION['fruits']="bananas";
$_SESSION['password'] = "123456";
echo "<h1>Username => ".$_SESSION['username']."</h1>";
if (!empty($_COOKIE['ProductName']) || isset($_COOKIE['ProductName'])) {
    echo "<h1>Product Name => ".$_COOKIE['ProductName']."</h1>";
}

?>