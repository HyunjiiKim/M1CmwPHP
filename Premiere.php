<?php

    //Saisir de nombre au clavier//
        echo "Saisissez 2 nombres :"; //comment1// 
        print "Saissez 2 nombres : "; 
        # echo() = print() 

    //Calcul de la moyenne//    
        $nb1 = readline(); 
        $nb2 = readline();
        $total = $nb1+ $nb2;

    #Afficher du résultat    
    echo "Le total est :" .$total;



    echo "Saisissez 3 nombres";
    $nb1 = readline();
    $nb2 = readline();
    $nb3 = readline();
    $moyenne = ($nb1+$nb2+$nb3)/3;
    echo "la moyenne est:" .$moyenne;

# 3rd exo

        echo "Saisir la valeur de a:";
        $a = readline(); # $ doit se présenter toujours devant la valeur et l'instruction se termine avec ; 
        echo "Saisir la valeur de b:";
        $b = readline();

        $Va = $a; #ajouter une nouvelle variable pour qu'on puisse enregistrer la valeur de a qui va effacer par la valeur de b
        $b = $a;
        $b = $Va;
         
        echo "\n a=" .$a."et b=".$b; # \n doit être à l'intérieur de double guillemets("")


        $rouge = "rouge";
        echo "la fleur est $a"; 
        echo 'la fleur est $a';


        date_default_timezone_set('Europe/Paris'); #Définir une zone temporelle 
        $date = date("H:i"); #l'heure courant 
        echo "Il est $date"."gmt.";


        define("NOM_De_LA_CONSTANTE",Valeur);
        #Example,
        define("pi",3.14);
?>  


