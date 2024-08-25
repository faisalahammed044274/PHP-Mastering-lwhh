<?php

$fname = "Isaac";
$lname = "Newton";
$surname = "ISNEW";
printf('His name is %3$s %1$s %2$s', $lname,$surname,$fname); // Variable swaping
echo PHP_EOL;

printf('the binry eqivalent of %1$d is %1$b', 12);

echo PHP_EOL;
$n = 45.678;

printf("%.6f",$n);
echo PHP_EOL; 
printf("%04d \n", $n);