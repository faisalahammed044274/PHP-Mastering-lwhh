
<?php
$name = "Venus";
$age = 12;
$info = null;
$fname =  "Faisal";
$lname = "Ahammed";


var_dump($name);
var_dump($age);
var_dump($info);
var_dump($fname ." ". $lname);

/*
Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource
*/

$result = true;
var_dump($result);

$planet =  "Neptune";
$uName = strtoupper($planet);
echo "We are searching for {$planet}.";
printf("We are found %s.",$uName);

echo PHP_EOL . "<br>";

$fName = "Faisal";
$lName = "Ahammed";
$title = "Md";
$fullName = $title." ".$fName . " " . $lName;  // Added space between names and changed + to .

printf("My First Name is %s, Last Name is %s. and Full Name is %s.", $fName, $lName, $fullName);

echo PHP_EOL . "<br>";

$planet1 = "Mercury";
$planet2 = "Jupiter";

printf("The smallest planet is %s and the biggest planet is %s.\n", strtoupper($planet1), strrev($planet2));


