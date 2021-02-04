<?php
	$poid = readline("Quels est le poids du Karva : ");
	$age = readline("Quels est l'âge du Karva : ");
	$longCorne = readline("Quels est la longueur des cornes du Karva : ");
	$hautCorne = readline("Quels est la hauteur des cornes du Karva : ");
	$note = $longCorne * $hautCorne + $poid;
	print("La note est : $note");
?>