<?php

$tabNotes = array ('Alex' =>[16,12,3,11] , 'Tom' =>[13,15,8,16], 'Sam' =>[15,19,0,11], 'Tim' =>[8,13,11,10]);
$somme = 0;

$keyChoisi = readline("Entrer le nom : ");
$TF = array_key_exists($keyChoisi, $tabNotes);

if ($TF == 1) {

echo "\n";
echo "Notes de $keyChoisi :\n";

foreach ($tabNotes[$keyChoisi] as $value) {
	echo "$value \n";
	
	$longueur = count($tabNotes[$keyChoisi]);
	$somme = $value + $somme;	
}

echo "\n";
$moyenne = $somme / $longueur;
echo "Moyenne : $moyenne \n";

}
else {
	echo "Erreur";
}

?>