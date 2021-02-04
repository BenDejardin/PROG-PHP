<?php
$anciennete = readline ("Votre ancienneté : ");
$salaire = readline("Votre salaire : ");
$statue = readline("Cadre o/n : ");

if($anciennete > 5 && $statue == o ){
	$salaire = $salaire * 1.10;
	print("Votre prime est de $salaire €");
}

elseif($anciennete > 5 && $statue == n ){
	$salaire = $salaire * 1.08;
	print("Votre prime est de $salaire €");
}
else{
	print("Votre prime est de 50 €");
}
?>