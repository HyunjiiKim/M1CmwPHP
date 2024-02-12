<?php

    #Calculer le prix d'une commande pour société 

    echo "Saisissez le prix unitaire";
    $PU = readline();
    echo "Saisissez la quantité d'article";
    $Q = readline();
    $Somme = ($PU*$Q)*0.95+((($PU*$Q)*0.95)*0.2);
    echo "A regler:" ." " .$Somme;

?>