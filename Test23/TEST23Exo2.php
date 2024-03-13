<?php

#Exercice2 : Billets et pièces

#Vous devez écrire un programme PHP permettant de saisir un montant à payer.

# a) Le programme doit :
# - indiquer votre nom et prenom (sans demander à l'utilisateur de le saisir)
# - Afficher la date et l'heure machine.

echo "Programme Billets et pieces\n";
echo "---------------------------------\n";
$nom = "KIM";
$prenom = "Hyunji";
echo "Programme ecrit par $prenom $nom.\n";

$date=date("d-m-Y");
$time=date("h:i:s");

echo "Nous somes le $date et il est $time \n";
echo "Veuillez saisir le montant a payer: "; $montant = readline();
echo "\n \n Vous devez fournir: \n";

# b) Si le montant saisi est négatif ou supérieur à 10 000 000, vous afficherez un message d'erreur
#c) Si le montant saisi n'est pas numérique, vous afficherez un message d'erreur.

	if(is_numeric($montant)){
		if(10000000>$montant && $montant>0){
			$B500=floor(($montant/500));
			$B200=floor(($montant%500)/200);
			$B20=floor((($montant%500)%200)/20);
			$P2=floor(((($montant%500)%200)%20)/2);
			$P1C=((($montant%500)%200)%20)%2;

			echo  
					"$B500 billet(s) de 500 euros. \n
					$B200 billet(s) de 200 euros. \n
					$B20   billet(s) de 20 euros.\n
					$P2     piece(s) de 2 euros. \n
					$P1C  piece(s) de 1 centime(s).\n";

			echo "Fin de Programme !";
		}
		else{ echo "Erreur ! Saisissez un nombre !";}
	}
	else{echo "Erreur ! Saisissez un nombre !";}

#d) Sachant que vous ne disposez que de billets de 500€, de 200€ et de 20€ ainsi que d e pièces de 2€ et de 1 centime,
#   affichez le nombre de pièces et de billets que vous devez fournir pour payer le montnat à payer.
# NB: Vous devez optimiser le nombre de billets et de pièces à donner !

?>