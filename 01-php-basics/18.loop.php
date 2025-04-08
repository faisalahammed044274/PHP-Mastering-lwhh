<?php
echo "======= For Loop ==========";
//for loop
for ($i = 1; $i <= 10; $i+=1){
    echo $i;
    echo PHP_EOL;
    for($j=0; $j < $i; $j++){
        echo "*";
    }
}
echo PHP_EOL;
echo "======= While Loop ==========";
//While Loop
echo PHP_EOL;
$i = 0;
while($i < 10){
    $i++;
    echo $i. PHP_EOL;
}
echo PHP_EOL;
echo "======= Do While Loop ==========";
//Do While Loop
echo PHP_EOL;
$i = 5;
do{
    $i++;
    echo $i . PHP_EOL;

}while($i < 10);

echo PHP_EOL;
echo "======= Go to ==========";
echo PHP_EOL;
$i = 0;
a : $i++;
echo $i . PHP_EOL;
if($i < 15) goto a;


