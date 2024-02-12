<?php
    echo "Saississez le montnat: ";
    $MT = readline();
    $SS = 0.7*($MT-1);
    $M = 0.3*($MT-1);
    $Payer = $MT-$SS-$M;
    echo "Remboursé par Sécurité Sociale: " .$SS;
    echo "Remboursé par Mutuelle: " .$M;
    echo "A payer: " .$Payer;

?>