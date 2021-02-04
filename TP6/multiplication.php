<?php

$colonne = 1;

for ($colonne = 1; $colonne < 10 ; $colonne++) { 
	
	for ($ligne = 1; $ligne < 10; $ligne++) {
		$resu = $colonne * $ligne; 
		print("$resu ");
	}
	print("\n");
}
?>