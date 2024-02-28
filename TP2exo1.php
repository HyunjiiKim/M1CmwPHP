<?php

    #plusPetit.php
    echo "Saisissez le premier nombre: ";
    $nb1 = readline();
    echo "Saisissez le duexième nombre: ";
    $nb2 = readline();

    function plusPetit($nb1,$nb2){
        if($nb1>$nb2){
            return $nb1;
        }
        else{
            return $nb2;
        }
    }
?>