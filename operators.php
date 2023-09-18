<?php
echo "<h1>We will discuss about operators in today class</h1>";
/*Types of operators 
Arithmetic operators
assignment operators
comparison operators
increment / decrement operators
logical operators
string operators
conditional assignment operators */
//single line comment
/* mulitple line comment

*/
/* **** Arithmetic Operators ***** */
/*

+ => Addition
- => substraction
* => Multiplication
/ => Divsion
% => Modulus => give remider(sesfal)

*/
$x = 5 / 78;

/* ***** Assignment Operators ****** */

/*
$x=5; here $x is a variable and 5 is their value and (=) this opeators is used for assigning 
value to variable



*/
$x = 5;
echo $x;
echo "<br>";
// $x = $x + 10;
$x += 10;
/*
$x -= 10; => $x = $x - 10;
$x *= 10; => $x = $x * 10;
$x /= 10; => $x = $x / 10;
$x %= 10; => $x = $x % 10;

 */

echo $x;

/*
Comparision Operators
$x = 5;
$y = 10;
$x == 5;
$x == $y;
== this opeator called equal
== this operator check only value is same or not

*/
$x = 5;
$y = "5";
echo "<br>";
echo var_dump($x == $y);
/*
$x === $y;
=== this operators called identical
=== this opeator check vlue should be same and data type also should be same
*/
$x = 10;
$y = "10";
echo "<br>";
echo var_dump($x === $y);
/*
 != this opeator called not equlato

*/

$x = 12;
$y = "12";
echo "<br>";
echo var_dump($x != $y);
/*
<> this opeator called not equalto
*/

$x = 12;
$y = 15;
echo "<br>";
echo var_dump($x <> $y);

/*
!== not identical 
*/
$x = 12;
$y = 15;
echo "<br>";
echo var_dump($x !== $y);

/*
> this operator called Greater than
< this operator called Less than
<= this operator called Less than or equal to
>= this operator called Greater than or equal to 

*/
$x = 10;
$y = 12;
echo var_dump($x >= $y);

/*
<=> this operators called Spacehip
Php 7
echo var_dump($x <=> $y);
if $x is less than $y then this will return -1
if $x is greater than $y then it will return 1;
if $x is equal to $y then it will return 0
*/
$x = 15;
$y = 10;
echo var_dump($x <=> $y);

/*
Increment and Decrement operators
$x++ => increment in $x by 1 this called post increment;
++$x => this called pre increment 
$x-- => decrement in $x by 1
--$x => this called pre decrement

*/
echo "<h1>Today class </h1><br>";
$x = 5;
echo $x--;
echo "<br>";
echo $x;

/*
Logical operators

&& <=> and this is called And
|| <=> or this is called Or

*/

$x = true;
$y = false;
echo "<br>";
echo var_dump($x && $y);

/*
String Operators
. => Concatenation;
*/
$str1 = "aman";
$str2 = "mayank";
echo "<br>";
$str1 = $str1."Azad"."kumar".$str2;
$str1 .= "Azad";
echo $str1;

/*
?: => this operator called Tenary operator
*/
$cond = "Kumar1";

$result = $cond == "Kumar" ? "Rajkumar" : "Azad";
$result = "";
// if($cond == "Kumar"){
//     $result = "Rajkumar";
// }else{
//     $result = "Azad";
// }
echo "<br>";
echo $result;
$check = "gulshan";
// if($check == "gulshan"){

// }else{

// }


?>