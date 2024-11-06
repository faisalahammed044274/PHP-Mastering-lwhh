<?php

$condition1 = true;
$condition2 = true;
$condition3 = true;
$condition4 = true;

if($condition1){
echo "Okay! Condition 1 \n";
    if($condition2){
        echo "Okay! Condition 2 \n";
        if($condition3){
            echo "Okay! Condition 3 \n";
            if($condition4){
                echo "Okay! Condition 4 \n";
            }else{
                echo "Else no 4 \n";
            }
        } else {
            echo "Else no 3 \n";
        }
    } else{
        echo "Else no 2 \n";
    }
} else{
    echo " Else No 1 \n";
}

echo "\n";

if($condition1 && $condition2 && $condition3 && $condition4){
    echo "Okay! Condition 1, 2, 3, 4 \n";
} elseif($condition1 && $condition2 && $condition3){
    echo "Okay! Condition 1, 2, 3 \n";
} elseif($condition1 && $condition2){
    echo "Okay! Condition 1, 2 \n";
} elseif($condition1){
    echo "Okay! Condition 1";
} else{
    echo "Else is Okay";
}