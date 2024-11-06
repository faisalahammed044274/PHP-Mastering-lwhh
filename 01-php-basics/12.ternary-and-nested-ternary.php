<?php

//Ternary Operator

$n = 13;

if(12 == $n){
    echo "Twelve";
}elseif(10 == $n){
    echo "Not Twelve it's Ten";
}else{
    echo "Not Twelve or Ten";
}

echo "\n";

// $numberInWord = (12 == $n) ? "Twelve" : "Just Another NUmber";
$numberInWord = ((12 == $n) ? "Twelve") : ((10 == $n) ? "Ten") : ((8 == $n) ? : "Number is not listed");
echo $numberInWord;

echo "\n";

if($n % 2 == 0){
    echo "Even Number";
} else{
    echo "Odd Number";
}

echo "\n";

echo "Ter2: \n ";
$result = ($n % 2 == 0) ? "Even Number" : "Odd NUmber";
echo $result;