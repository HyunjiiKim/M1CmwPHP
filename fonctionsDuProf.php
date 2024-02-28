<?php
function mois($num){
	// Fonction qui retourne le nom du mois en français (sans accent)
	// Paramètres: numéro du mois (entier)
	// Retourne le nom du mois (chaîne caractères)
	switch ($num):
		case 1: return "janvier";break; 
		case 2: return "fevrier";break; 
		case 3: return "mars";break; 
		case 4: return "avril";break; 
		case 5: return "mai";break; 
		case 6: return "juin";break; 
		case 7: return "juillet";break; 
		case 8: return "aout";break; 
		case 9: return "septembre";break; 
		case 10: return "octobre";break; 
		case 11: return "novembre";break; 
		case 12: return "decembre";break; 
		default: return False;
	endswitch;
}

function etoile($nom){
	// Procédure qui affichere la chaîne de caractères reçue entourée d'étoiles
	// Paramètres: un nom (chaîne caractères)
	// Pas de retour
	$taille=strlen($nom);
	$ligne="";
	if ($taille>0){
		for($i=1;$i<=$taille+4;$i++){
			$ligne.="*";
		}
		echo $ligne;
		echo "\n* ".$nom." *\n";
		echo $ligne;
	}	
}	
