<?php
/*
$nbLigne = readline("Nombre de ligne : ");
$ligne = 1;
$nbCarractere = 1;
$nbEspace = $nbLigne-1;

while ($ligne<=$nbLigne) {
    echo str_repeat(" ", $nbEspace);
	echo str_repeat("*", $nbCarractere);
	$nbCarractere = $nbCarractere + 2;
	echo "\n";
	$ligne++;
	$nbEspace--;
}	
*/

$nbLigne = readline("Nombre de ligne : ");
$nbCarractere = 1;
$nbEspace = $nbLigne-1;

for ($ligne = 1; $ligne<=$nbLigne; $ligne++) {
    echo str_repeat(" ", $nbEspace);
	echo str_repeat("*", $nbCarractere);
	$nbCarractere = $nbCarractere + 2;
	echo "\n";
	$nbEspace--;
}	

?>