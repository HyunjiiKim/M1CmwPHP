<?php

#Exo4: Bonne nuit

//a 
echo "Saisissez un nombre: "; $n=readline();
$i=1;
if (is_numeric($n)){
    if($n==1){
        echo "Et $n mouton !";
    }
    else{
        while($i<=$n){
            echo "Et $i moutons !\n";
            $i++;
        }
    }

    echo "Bonne nuit...";    
}
else{
    echo "Erreur ! Saissez bien un nombre entier !";
}

