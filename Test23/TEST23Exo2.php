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
echo "Nous sommes le "; date("dd-mm-YYYY"); echo "et il est"; date("HH:ii:ss")

# b) Si le montant saisi est négatif ou supérieur à 10 000 000, vous afficherez un message d'erreur

#c) Si le montant saisi n'est pas numérique, vous afficherez un message d'erreur.

#d) Sachant que vous ne disposez que de billets de 500€, de 200€ et de 20€ ainsi que d e pièces de 2€ et de 1 centime,
#   affichez le nombre de pièces et de billets que vous devez fournir pour payer le montnat à payer.
# NB: Vous devez optimiser le nomùbre de billets et de pièces à donner !

?>