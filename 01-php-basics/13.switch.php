<?php 

$n = 12;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is a even number";
    break;
    default:
        echo "{$n} is a odd number";
}
echo PHP_EOL;

$color = 'blue';

switch ($color) {
    case 'red':
    case 'green':
    case 'blue':
        echo  ucwords($color) . " is my favourite color";
        break;
    default:
    echo "I don't like any of these colors";
}

echo PHP_EOL;

if ('red' == $color || 'green' == $color || 'blue' == $color) {
    echo  ucwords($color) . " is my favourite color";
}else{
    echo "I don't like any of these colors";
}