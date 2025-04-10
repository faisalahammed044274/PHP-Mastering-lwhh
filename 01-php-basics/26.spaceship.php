<?php 
$x = 55;
$y = 99;

 $result = $x <=> $y;
if($result == 1){
    echo "{$x} is grater then {$y}";
} else if($result==0){
    echo "{$x} is equal to {$y}";
} else if($result==-1){
    echo "{$x} is smaller then {$y}";
}

