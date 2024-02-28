<?php

    function fahrenheit($num){
        $far=1.8*$num+32;
        echo $far;
    }

    function tarifBoite($sex,$age){
        $tarif=50;

        if(is_numeric($age) && ($sex=="F"||$sex=="H")){

            if($age<18){
                return "Interdit";
            }

            if($sex=="F"){
                $tarif=0.5*$tarif;
                return $tarif;
            }
            else{
                if($age>=65){
                    return($tarif*0.75);
                }
            }

            if($age>=65){
                if($sex=="F"){
                    $tarif=0.5*$tarif;
                }
            }

        }   
    }
    return FALSE;
    
    function plusPetit($nb1,$nb2){
        if($nb1>$nb2){
            return $nb1;
        }
        else{
            return $nb2;
        }
    }

    function multiple($nb){
        if($nb%2==0 && $nb%3==0){
            return True;
        }
        else{
            return False;
        }
    }

    function TP2(){
        echo "Exercice 1: Plus petit ------------> taper 1\n";
        echo "Exercice 2: Multiples -------------> taper 2\n";
        echo "\n";
        echo "Pour quitter ----------------------> taper 0\n";
        echo "votre choix : ";
        $n = readline();
        if($n==1){
             TP2exo1();
        }
        if($n==2){
            TP2exo2();
        }
        if($n==0){
            return FALSE;
        }
    }

    function TP2exo1(){
        echo "Saisissez premier nombre :\n";
        $n1=readline();
        echo "Saisissez deuxième nombre :\n";
        $n2=readline();
        echo "le nombre le plus petit entre les deux c'est : "; plusPetit($n1,$n2);
    }

    function TP2exo2(){
        echo "Saisissez un nombre :\n";
        $n=readline();
        if(multiple($n)){echo "c'est un multiple de 2 et 3";}
        else{echo "ce n'est pas un multiple de 2 et 3";}

    }
    


?>