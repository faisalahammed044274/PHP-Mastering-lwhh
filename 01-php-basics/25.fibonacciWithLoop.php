<?php
//0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584

$veryOld = 0;
$old = 1;
$new = 1;

for($i = 0; $i<10; $i++){
    echo $veryOld . " ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
    echo PHP_EOL;
}