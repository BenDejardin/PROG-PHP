<?php

$nb = readline("Votre nombre : ");
$resul = $nb % 2;

if ($resul == 1) {
	print("Impair \n");
}
else{
	print("Pair \n");
}

for ($i=0; $i <20 ; $i= $i + 2) { 
	$resultat = $nb + $i;
	print("$resultat \n");
}

?>