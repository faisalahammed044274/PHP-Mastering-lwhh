<?php

// Divisible by 4 ?
//Divisible by 100 ?
//Divisible by 400 ?

$year = 2024;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "The year {$year} is a leap year.";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "The year {$year} is not a  leap year";
} elseif($year % 4 == 0){
    echo "{$year} is a leap year";
} else {
    echo "The year {$year} is not a leap year";
}

echo "\n";
$year2 = 2006;
if ($year2 % 4  == 0 && ($year2 % 100 !=0 || $year2 % 400 == 0)){
    echo  "{$year2} is a leap year.";
} else {
    echo "{$year2} is not a leap year.";
}

//year = 2003
