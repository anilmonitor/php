<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "hello";
echo "<br>";
echo 1+2+100;
echo "<br>";
$a = 10;
$b = 20;


// operators in php 
// Arithmetic Operations
echo "Some of a and b is: ";
echo $a+$b;
echo "<br>"; 

echo "10-20 = ";
echo $a - $b;
echo "<br>"; 

echo "10*20 = ";
echo $a * $b;

echo "<br>";
echo "10/20 = ";
echo $a / $b;
echo "<br>";

//comparison operator
echo var_dump(10 == 10); //
echo "<br>";
echo var_dump(10 == 5); //false
echo "<br>";



// logical operator 
echo var_dump(true or false); //true
echo "<br>";
echo var_dump(true and false); //false
echo "<br>";


// increment & decrement operator  (--, ++)
$age = 10;
echo ++$age; //11
echo "<br>";

$price = 5;
echo $price++; //5 
echo "<br>";
echo $price; //6
echo "<br>";

?>

</body>
</html>