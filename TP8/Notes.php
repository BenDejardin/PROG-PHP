<?php

$tabNotes = array ('Alex' =>16 , 'Tom' =>13, 'Sam' =>15, 'Tim' =>8);
$longueur = count($tabNotes);
$somme = 0;

echo "\n";
echo "Notes de la classe :\n";

foreach ($tabNotes as $key => $value) {
	echo "$key : $value \n";
	$somme = $value + $somme;
}

$moyenne = $somme / $longueur;
echo "\n";
echo "Moyenne de la classe :\n";
echo($moyenne);
?>