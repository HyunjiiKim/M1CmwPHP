<?php

# Q1)
echo "Programme Impots\n--------------------------\n\n";

echo "Veuillez saisir le montant de vos revenu: ";
$rev=readline();
echo "\nVeuillez saisir le nombre d'adultes dans le foyer: ";
$nadult=readline();
echo "\nVeuillez saisir le nombre d'enfants dans le foyer: ";
$nenfant=readline();
echo "\nVeuillez saisir le montant de vos frais reels:";
$frais=readline();

echo "\nInformations bien recues !\n\n";

# Q2) 
if($rev<0 || $nadult<0 || $nenfant<0 || $frais<0){
    echo "Vous devez saisir des valeurs numeriques et positives !\n";
}
else{

        # Q3)

        $revR=$rev-$frais;

        # Q4)

        $rev10=$rev-$rev*0.1;
        if($revR>=$rev10){
            $revF=$rev10;
        }
        else{
            $revF=$revR;
        }

        # Q5)

            function quotient_familial($revF,$nadult,$nenfant){
                $QF=$revF/($nadult+($nenfant/2));
                if($QF<=9710){
                    return ($QF*0);
                }
                elseif($QF<=26818){
                    return ($QF*0.14);

                }
                elseif($QF<=71899){
                    return ($QF*0.3);
                }
                elseif($QF<=152260){
                    return ($QF*0.41);
                }
                else{
                    return ($QF*0.45);
                }
            }

    # Q6)
    $answer =floor(quotient_familial($revF,$nadult,$nenfant));
    echo "Vous devez payer $answer euros d'impots ";
    
}







?>