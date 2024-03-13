<?php

#Exo3 : Divisibilite

function divisiblepar3($n){
    if($n%3==0){
        return True;
    }
}

$i=1;
while(divisiblepar3($n)){
    if($n>=154&&$n<=268){
        echo divisiblepar3($n)"-";
        $i++;
    }    
}
