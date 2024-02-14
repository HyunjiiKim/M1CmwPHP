<?php

    #plusPetit.php
    echo "Saisissez le premier nombre: ";
    $nb1 = readline();
    echo "Saisissez le duexième nombre: ";
    $nb2 = readline();

    if($nb1>$nb2){
        echo $nb1;
    }
    else{
        echo $nb2;
    }
?>