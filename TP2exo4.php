<?php
    #triMots.php
    echo "Saisissez le premier alphabet: ";
    $LT1 = readline();
    echo "Saisissez le deuxième alphabet: ";
    $LT2 = readline();
    echo "Saisissez le troisième alphabet: ";
    $LT3 = readline();

    if((($LT1>$LT2)&&($LT2>$LT3))){
        echo "$LT3 $LT2 $LT1";
    }
    elseif((($LT1>$LT3)&&($LT3>$LT2))){
        echo "$LT2 $LT3 $LT1";
    }
    elseif((($LT2>$LT1)&&($LT1>$LT3))){
        echo "$LT3 $LT1 $LT2";
    }
    elseif((($LT2>$LT3)&&($LT3>$LT1))){
        echo "$LT1 $LT3 $LT2";
    }
    elseif((($LT3>$LT1)&&($LT1>$LT2))){
        echo "$LT2 $LT1 $LT3";
    }
    else{
        echo "$LT1 $LT2 $LT3";
    }
   
?>
