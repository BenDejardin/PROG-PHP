<?php
	$prix = readline("Quel est le prix en TTC : ");
	$nbr = readline("Combien en voulez-vous ? ");
	$resultat = $prix * $nbr;
	$taxe = $resultat * 1.02;
	print("Vous devez payer $taxe €");
?>