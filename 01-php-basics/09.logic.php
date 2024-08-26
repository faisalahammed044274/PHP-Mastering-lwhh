<?php
//if else conditions
$n = 7;
if ($n % 2 == 0){
    echo "$n is an even number";
} else{
    echo "$n is an odd number";
}

echo PHP_EOL;

if ($n > 10){
    echo "$n is greater than 10";
} elseif($n >= 9){
    echo "$n is less than or equal to 9";
} elseif($n >= 6){
    echo "$n is greater than or equal to 6";
} else{
    echo "$n is less than 6";
}

echo PHP_EOL;
//switch statements
switch($n = 14){
    case 10:
        echo "n is 10";
        break;
    case ($n = 11):
        echo "n is 11";
        break;
    case($n = 12):
        echo "n is 12";
        break;
    case($n = 13):
        echo "n is 13";
        break;
    case($n = 14):
        echo "n is 14";
        break;
    case($n = 15):
        echo "n is 15";
    }
