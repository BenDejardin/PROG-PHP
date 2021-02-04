<?php
$quantite = readline("Combien de bouteille voulez vous ? : ");
$prixUnite = readline("Quel est le prix ? : ");
$prix = $quantite * $prixUnite;
if($prix >= 200)
	{
	print($prix);
	}
else  
	{
	$frais = $prix * 0.10;
	if($frais < 8)
		{
		$frais = 8;
		}
	echo($prix + $frais);
	}
?>