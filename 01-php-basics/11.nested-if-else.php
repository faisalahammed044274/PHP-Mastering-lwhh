<?php

if(true){
    echo " It's true 1 \n";
    if(false){ 
        echo "it's true 2 \n";
    } else {
        echo "Hello False 2 \n";
    }
} else{
    echo "Hello False 1 \n";
}
?>
2nd
<?php

if(true){
    echo "True 1 \n";
    if(false){
        echo "True 2 \n";
        if (true){
            echo "True 3 \n";
        }else {
            echo "False 3 \n";
        }
    } else {
        echo "Hello False 2 \n";
    }
}else{
    echo "False 1 \n";
}