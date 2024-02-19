<?php

    #secondePlus.php

    echo "Saisissez l'heure";
    $hour = readline();
    echo "Saisissez les minutes";
    $min = readline();
    echo "Saisissez les secondes";
    $sec = readline();
    
    $sec = $sec+1;

    if($sec>=60){
        $sec=$sec%60;
        $min=$min+1;
    }

    if($min>=60){
        $min=$min%60;
        $hour=$hour+1;
    }

    echo "$hour h $min min $sec sec";

?>