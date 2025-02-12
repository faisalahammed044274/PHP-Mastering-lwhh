<?php

$n = -11;

$r  = $n % 2;

switch($r){
    case 0:
        switch(true){
            case $n > 0:
                echo "$n is a Positive Even number";
                break;
            case $n < 0:
                echo "$n is a Negative Even number";
                break;
        }
        break;
    default:
    switch($n){
        case $n > 0:
            echo "$n is a positive Odd number";
            break;
        case $n < 0:
            echo "$n is a Negative Odd number";
            break;
    }
    
}

switch(true){
    case ($r==0 && $n>0):
        echo "$n is a Positive Even number";
        break;
    case ($r==-1 && $n<0):
        echo "$n is a Negative Odd number";
        break;
    case ($r==1 && $n>0):
        echo "$n is a Positive Odd number";
        break;
    case ($r==0 && $n<0):
        echo "$n is a Negative Even number";
        break;
}