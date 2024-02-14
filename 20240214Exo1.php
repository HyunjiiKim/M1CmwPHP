<?php

    echo "Saisissez 1er nombre: ";
    $num1 = readline();
    echo "Saisissez 2e nombre: ";
    $num2 = readline();

    if($num1>$num2){
        $diff=$num1-$num2;
    }
    else{
        $diff=$num2-$num1;
    }

    echo "le résultat est $diff.";
?>
