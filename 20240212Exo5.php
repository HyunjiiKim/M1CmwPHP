<?php

    echo "Saisissez l'heure :";
    $hour = readline();
    echo "Saisissez le minute: ";
    $minute = readline();
    echo "Saisissez la seconde: ";
    $second = readline();
    $hour = $hour*3600;
    $minute = $minute*60;
    echo $hour+$minute+$second;

?>
    
