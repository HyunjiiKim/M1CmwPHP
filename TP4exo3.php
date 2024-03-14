<?php

#Exo3 : Divisibilite

function divisiblepar3($n){
    if($n%3==0){
        return True;
    }
    else{
        return False;
    }
}

$n=1;
while($n<=268){
    $n++;
    if($n>=154){
        if(divisiblepar3($n)){
          echo "$n-";
        }
    }
}

?>