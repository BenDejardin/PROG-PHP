<?php
print("1 = Sphère\n");
print("2 = Cube\n");
print("3 = Parallélépipède\n");
print("4 = Cylindre\n");
$numero = readline("Tapez le numéro de la figure correspondant à votre choix : \n");

if ($numero == 1){
	$rayon = readline("Rayon : \n");
	$volume = round(4/3 * 3.14 * $rayon , 2);
	print("$volume");
}

elseif ($numero == 2){
	$cote = readline("Coté : \n");
	$volume = round(pow($cote, 3) , 2);
	print("$volume");
}

elseif ($numero == 3){
	$hauteur = readline("Hauteur : \n");
	$largeur = readline("Largeur : \n");
	$longeur = readline("Longeur : \n");
	$volume = round($hauteur*$largeur*$longeur);
	print("$volume");
}

else{
	$hauteur = readline("Hauteur : \n");
	$rayon = readline("Rayon : \n");
	$volume = round($hauteur * 3.14 * pow($rayon, 3) , 2);
	print("$volume");
}

?>