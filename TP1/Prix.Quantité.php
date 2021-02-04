<?php
	$prix = readline("Quel est le prix en TTC : ");
	$nbr = readline("Combien en voulez-vous ? ");
	$resultat = $prix * $nbr;
	print("Vous devez payer $resultat €");
?>