<?php

    #Calculer le prix d'une commande pour société 

    echo "Saisissez le prix unitaire :";
    $Prix = readline();
    echo "Saisissez la quantité d'article :";
    $QTE = readline();
    $MT = $Prix*$QTE;
    $Remise = $MT*0.05;
    $DV = ($MT-$Remise)*0.02;
    $Somme = $MT-$Remise+$DV;
    echo "Remise: " .$Remise ."\n";
    echo "Prix de port: " .$DV ."\n"; 
    echo "A regler:" ." " .$Somme;

?>