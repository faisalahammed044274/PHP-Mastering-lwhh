<?php

//Ternary Operator

$n = 10;

if(12 == $n){
    echo "Twelve";
}elseif(10 == $n){
    echo "Not Twelve it's Ten";
}else{
    echo "Not Twelve or Ten";
}

echo "\n";

// $numberInWord = (12 == $n) ? "Twelve" : "Just Another NUmber";
$n33 = 9;
$numInWord = ($n33 == 12) ? "Twelve" : 
                (($n33 == 10) ? "Ten" : 
                (($n33 == 9) ? "Nine" : 
                (($n33 == 8) ? "Eight" : 
                (($n33 == 7) ? "Seven" : 
                (($n33 == 6) ? "Six" : 
                (($n33 == 5) ? "Five" : "Number is not listed"))))));

echo "<h2>" . $numInWord . "</h2>";

echo "\n";
$n = 3;
$numberInWord = ($n == 12) ? "TWELVE" : 
                (($n == 10) ? "TEN" : 
                (($n == 9) ? "NINE" : 
                (($n == 8) ? "EIGHT" : "NUMBER NOT LISTED")));

echo $numberInWord;


echo "\n";

// if($n % 2 == 0){
//     echo "Even Number";
// } else{
//     echo "Odd Number";
// }

echo "\n";

echo "Ter2: \n ";
$result = ($n % 2 == 0) ? "Even Number" : "Odd NUmber";
echo $result;