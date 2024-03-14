<?php

// Exo5: Moyenne de notes 

//a

$somme=0;
$i=0;
$note=0;
    while($note>=0 && $i>=0){
        echo "Saisissez la note: ";
        $note=readline();
        if($note>20){
            echo "Erreur ! La note saisie devrait etre entre 0 et 20.";
        }
        else{
            $somme=$note+$somme;
            $i++;
        }
    }

    echo "\nLa moyenne de notes est " .$somme/$i ." sur 20.";
   

