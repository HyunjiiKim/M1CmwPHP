<?php
# Exercice 1 : Sinistre
# Vous venez d'avoir un accident de voiture et vous devez déclarer à votre assureur le montant des réparations.
# L'assureur utilise un programme PHP qui fonctionne (c'est à dire que vous avez testé et vérifé les résultats obtenus) qui répond au problème suivant: 
#Le programme demande la valeur de la voiture et le montant des réparations et affiche le montant à rembourser sous la forme suivante : 
    /* Pour les reparations qui vous ont coutees 1295.45 euros, nous remboursons 595.45 euros ! */
#ou
    /* Pour les reparations qui vous ont coutees 304.00 euros, nous ne remboursons rien ! */

#Pour tout accident, une franchise de 700 euros est retenue; cad qu'il n'y a un minimum de 700 euros qui reste à votre charge.
# Le montant resmbopursé ne peut pas dépasser la valeur de la voiture
#S'il y a remboursement, on affiche le montant remboursé sinon on affiche "nous ne remboursons rien" (cf. exemple ci-dessus).

# a) Ecrire une fonction nommée "remboursement" qui reçoit 2 montants (valeur de la voiture et montant des réparations) et retourne le montant à remboruser (en tenant compte de la franchise.)
# S'il n'y a pas de remborsement, la fonction doit retourner 0 (zero).

    /* a = la valeur de voiture */
    /* b = le montant des réparations */

function remboursement($a,$b){
    if($b>700){
        $refund=$b-700;

        if($refund>$a){
            return ($refund=$a);
        }
        else{
            return $refund;
        }
    }
    else{
        return false;
    }
}

# b) Ecrire un programme qui utilise la fonction "remboursement". Le programme devrea permettre de saisir au calavier la valeur de la voiture et un montant de réparations et d'afficher une phrase indiquant le remboursement (cf. exemple ci-dessus).



echo "Saisissez le montant des réparation : \n";
$montant=readline();
echo "Saisissez la valeur de la voiture : \n";
$valeur=readline();

if(remboursement($valeur,$montant)){
    echo "Pour les reparations qui vous ont coutees $montant euros, nous remboursons "; echo remboursement($valeur,$montant); echo "euros !";
}
else{
    echo "Pour les réparations qui vous ont coutees $montant euros, nous ne remboursons rien !";
}

?>