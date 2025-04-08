<?php

for($i = 10; $i > 0; $i-=1){
    echo $i . ":" . (11 - $i);
    echo  PHP_EOL;
}

echo "==================\n";

for($i = 10, $j = 1; $i > 0; $i-=1, $j++){
    echo $i . ":" . $j;
    echo  PHP_EOL;
}

echo PHP_EOL;
echo "======= Use an array key-value approach ==========";
echo PHP_EOL;

$numbers = range(10, 1);
$values = range(1, 10);
foreach(array_combine($numbers, $values) as $i => $j){
    echo $i . ":" . $j;
    echo PHP_EOL;
}