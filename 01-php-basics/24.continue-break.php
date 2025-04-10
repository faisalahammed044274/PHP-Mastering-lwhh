<?php

// for($i=20; $i< 50; $i++){
//     echo $i;
//     echo PHP_EOL;

//     if ($i % 2 == 1){
//         break;
//     }
// }

for ($i = 20; $i < 150; $i++) {

    if($i < 57){
        continue;
    }

    if($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
        break;
    }
} 