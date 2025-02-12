<?php

$n = -11;

$r  = $n % 2;

switch ($r) {
    case 0:
        switch (true) {
            case $n > 0:
                echo "$n is a Positive Even number";
                break;
            case $n < 0:
                echo "$n is a Negative Even number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive Odd number";
                break;
            case $n < 0:
                echo "$n is a Negative Odd number";
                break;
        }
}

echo PHP_EOL;

switch (true) {
    case ($r == 0 && $n > 0):
        echo "$n is a Positive Even number";
        break;
    case ($r == -1 && $n < 0):
        echo "$n is a Negative Odd number";
        break;
    case ($r == 1 && $n > 0):
        echo "$n is a Positive Odd number";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is a Negative Even number";
        break;
}

echo PHP_EOL;

$string = "8balls";
switch ($string) {
    case (string) "9balls":
        echo "9balls";
        break;
    case (string)"8":
        echo "8";
        break;
    case (string)"8balls":
        echo "8balls";
        break;
    case (string)"7balls":
        echo "7balls";
        break;
}
