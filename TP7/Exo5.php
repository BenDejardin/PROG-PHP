<?php
$positive = array();
$negative = array();
$fin = readline("Entrer votre chiffre de répétition : ");
$i = 0;
do {
	$saisie = readline("Entrer votre chiffre : ");
	$i++;
	if($saisie >= 0){
		array_push($positive, $saisie);
	}
	else{
		array_push($negative, $saisie);
	}
}while ( $i < $fin); 

$nbPositif = count($positive);
$nbNegative = count($negative);
	
print("Nombre positif : \n");
for ($j=0; $j < $nbPositif ; $j++) {
	print($positive[$j] ."\t");
}

print("\n");
print("Nombre negative : \n");
for ($k=0; $k < $nbNegative ; $k++) {
	print($negative[$k] ."\t");
}

?>