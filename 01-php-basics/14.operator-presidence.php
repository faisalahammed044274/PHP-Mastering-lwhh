<?php

// $e =  true || false;
// $f = false or true;
/*
Operator precedence
1. || has higher precedence than or
2. = has higher precedence than or
3. = has higher precedence than ||
*/
$e =true && false;
$f = true and false;
/*
Operator precedence
1. && has higher precedence than and
2. = has higher precedence than and
3. = has higher precedence than &&
*/
var_dump($e, $f); // true, false

// https://www.php.net/manual/en/language.operators.precedence.php
