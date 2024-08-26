<?php
$fname = 'Faisal';
$lname =  'Ahammed';
$surname = 'Setu';
printf('His Full name is %3$s %2$s %1$s.', $surname, $lname, $fname);

$whoami = sprintf("I am  %s %s" , $lname,$fname);
echo PHP_EOL;
echo $whoami;