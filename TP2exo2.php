<?php

    #testNomnbrePair.php

    echo "Saisissez un nombre";
    $nb = readline();
    if($nb%2==0){
        echo "Pair";
    }
    else{
        echo "impair";
    }

    function multiple($nb){
        if($nb%2==0 && $nb%3==0){
            return True;
        }
        else{
            return False;
        }
    }

?>