<?php
	$dateNaissance = readline("Quel est votre date de naissance ? : ");
	$age = date("Y") - $dateNaissance;
	echo ("Vous avez $age");
?>