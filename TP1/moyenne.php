<?php
	$moyenne1 = readline("Votre moyenne 1 est : ");
	$moyenne2 = readline("Votre moyenne 2 est : ");
	$moyenne3 = readline("Votre moyenne 3 est : ");
	$resultat = ($moyenne1 + $moyenne2 + $moyenne3)/3;
	
	$arrondInf = floor($resultat);
	print("Votre moyenne arrondi a l'entier infereiur est $arrondInf \n");
	
	$arrondiDeuxChiffre = number_format($resultat,2);
	print("Votre moyenne arrondi a 2 chiffre apres la virgule est $arrondiDeuxChiffre \n");
	
	$arrondiSup = ceil($resultat);
	print("Votre moyenne arrondi a l'entier superieur est $arrondiSup \n");
?>