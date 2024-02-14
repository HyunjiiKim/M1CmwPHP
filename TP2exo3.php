<?php

    #age.php
    echo "Saisissez votre année de naissance";
    $year = readline();

    $age = date("Y")-$year;
    
    if($age>1 && $age<130){
        echo $age;
    }
    else{
        echo "Pas validé !";
    }

?>