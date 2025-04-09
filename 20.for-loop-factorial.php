<?php
//5 =  5*4*3*2*1
//6 = 6*5*4*3*2*1
$n = 6;
for ($i = $n , $factorial=1; $i>1; $i--){
    // $factorial = $factorial * $i;
    $factorial *= $i;
}

printf("Factorial of %d is %d", $n, $factorial);