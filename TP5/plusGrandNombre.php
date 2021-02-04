<?php
$plusGrand = 0;
$n = 0;

for ($i=1; $i <= 10; $i++) { 
	$numero = readline("Entrez le numero $i : ");
	if ($plusGrand < $numero) {
		$plusGrand = $numero;
		$n = $i;
	}
}
print("Le plus grand nombre étais $plusGrand en numéro $n");

?>