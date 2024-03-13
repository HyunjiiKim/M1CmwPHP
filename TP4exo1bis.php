<?php
# Exo 1 bis : While
function comptage($n){
    $i=1;
    while($i<=$n){
        echo "$i-";
        $i++;
    }
}

echo "Saisissez un nombre: ";
$n=readline();
if(is_numeric($n)){
    echo comptage($n);
}