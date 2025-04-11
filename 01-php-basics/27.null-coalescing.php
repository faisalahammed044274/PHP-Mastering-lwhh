<?php

$default_lat = 23.9;
$default_lon = 90.8;

$user_lat;
// Ternary Operator
// $lat = isset($user_lat) ? $user_lat : $default_lat;
// echo $lat;

//null-coalescing Operator
$lat = $user_lat ?? $default_lat;

echo $lat;





if(isset($user_lat)){
    $lat = $user_lat;
} else{
    $lat = $default_lat;
}