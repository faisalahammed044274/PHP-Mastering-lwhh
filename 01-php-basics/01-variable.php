<?php
// Variable
$name = "Faisal"; //String
$age =29; // integer
$height = 5.6; // float
$word = "age";
$question ="How Are You ?";

echo "My Name is " . $name . ". My age is ". $age. ". My height is ". $height . " inch.\n";

echo $word;
echo "\n";
echo $$word;
echo "\n";
echo 'Hello $name';
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}";
echo "\n";
echo "Hello {$name}, {$question}\n";