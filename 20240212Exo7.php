<?php
    echo "Remplissez par un chiffre compris entre 1 et 9. \n Chaque chiffre ne peut être utilisé qu'une seule fois.\n";
    echo "Saisissez le premier nombre: ";
    $num1 = readline();
    $num = $num1+13;
    echo "Saisissez le deuxième nombre: ";
    $num2 = readline();
    $num = $num*$num2;
    echo "Saisissez le troisième nombre: ";
    $num3 = readline();
    $num = $num/$num3;
    echo "Saisissez le quatrième nombre: ";
    $num4 = readline();
    $num = $num+$num4;
    $num = $num+12;
    echo "Saisissez le cinquième nombre: ";
    $num5 = readline();
    $num = $num*$num5;
    echo "Saisissez le sixième nombre: ";
    $num6 = readline();
    $num = $num-$num6;
    $num = $num-11;
    echo "Saisissez le septième nombre: ";
    $num7 = readline();
    $num = $num+$num7;
    echo "Saisissez le huitième nombre: ";
    $num8 = readline();
    $num = $num*$num8;
    echo "Saisissez le neuvième nombre: ";
    $num9 = readline();
    $num = $num/$num;
    $num = $num-10;

    if ($num=66) {
        echo "Vous avez atteint à 66 ! Felicitations !";
}   else {
        echo "Reessayez";
    }
?>
    