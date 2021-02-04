<?php
$stack = array();
$i = 0;
do {
	$saisie = readline("Entrer votre chiffre : ");
	$i++;
	if($saisie >= 10){
		array_push($stack, $saisie);
	}
	
}while ( $i <= 10); 

echo count($stack, COUNT_RECURSIVE);
?>