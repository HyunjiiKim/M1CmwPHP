<?php

    echo "Saisissez votre age\n";
    $age=readline();
    echo "\nSaisissez votre sexe\n";
    $sex=readline();

    include("mesFonctions.php");
    echo tarifBoite($sex,$age);
?>