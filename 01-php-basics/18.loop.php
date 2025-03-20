<?php

// foreach
// for
// while
// do while 
// goto

// for ($i = 1; $i < 10; $i++) {
//     // echo $i . "\n";
//     echo PHP_EOL;
//      for ($j=0; $j<$i; $j++){
//     echo "*";
//     }
// }


for($a =0; $a <10; $a++){
    echo "\n";
    for($b = 0; $b < $a; $b++){
        echo "*";
        }
}
echo PHP_EOL;
$x = 0;

while($x < 10){
$x++;
echo $x. PHP_EOL;
}

echo PHP_EOL;

$c = 24;

do{
    $c++;
    echo $c . PHP_EOL;
    } while ($c < 30);
    ?>