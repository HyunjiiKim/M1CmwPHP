<?php

    /*a) essayer la fonction floor*/
    echo "Saisissez un nombre décimal\n";
    $nb=readline();
    echo floor($nb);

    # b) fonction fournie par l'extérieur

    include("fonctionsDuProf.php");
    echo "Saisissez un nombre entre 1 et 12\n";
    $nb2=readline();
    echo mois($nb2);
    echo "\n";

    # c) utilisation une procédure nommée "etoile"

    echo "saisissez un nom\n";
    $nom=readline();
    echo etoile($nom);
?>