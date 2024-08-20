<?php
define('ADMIN', 121);
echo "Hello";
echo "\n";
$name = "Faisal";
$age = 29;
$height = 5.6;
$issue = null;
//var_dump = infromation about variable
var_dump($name);
var_dump($age);
var_dump($height);
var_dump($issue);

echo "\n";
echo "Admin is ". ADMIN;

/*
String = "test";
Integer =2323; int
Float = 5.6678; Double/FLoat
boolean = true/false;
NULL
Array
Object
Resource
*/
echo "\n";
$country = "Bangladesh";
$uppercaseCountry = strtoupper($country);
echo 'I\'m Living in '.$country.'.';
echo "\n";
echo "I'm Living in {$uppercaseCountry}.";
echo "\n";
printf("We are living in %s", $country);
echo "\n";
$fname = "Faisal";
$lname = "Ahammed";

printf("My %s Name is %s %s %s %s %s", "Formal",$fname ,$lname, "and age is ",$age,".");


$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "\n";
echo "The smallest planet is " .$planet1. " and the biggest planet is ".$planet2.".\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}.\n";
printf("The smallest planet is %s and the biggest planet is %s. \n",$planet1,$planet2);
printf("The smallest planet's Uppercase is %s and the biggest planet's reverse is %s.\n",strtoupper($planet1),strrev($planet2));