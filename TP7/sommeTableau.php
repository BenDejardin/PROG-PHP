<?php

$tab1 = array(4,8,7,9,1,5,4,6);
$tab2 = array(7,6,5,2,1,3,7,4);

$tabSomme = array();
 
$longueur = count($tab1);
$i = 0;

while ($i < $longueur) {
	$somme =  $tab1[$i] + $tab2[$i];
	array_push($tabSomme, $somme);
	$i++;
}

for ($p=0; $p < $longueur ; $p++) {
	print($tabSomme[$p] ."\t");
}
?>