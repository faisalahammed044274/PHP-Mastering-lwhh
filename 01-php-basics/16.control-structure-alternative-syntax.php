<?php 
$n = 11;


if($n%2 == 0) :
    echo "The number is even number.";
else:
    echo "The number is  odd number.";
endif;

echo PHP_EOL;

switch($n % 2):
    case 0:
        echo "The number is even number.";
        break;
    default:
        echo "The number is odd number.";
        break;
    endswitch;

