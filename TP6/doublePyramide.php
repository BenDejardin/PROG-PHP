<?php
$nbLigne = readline("Nombre de ligne : ");
$ligne = 1;
$nbCarractere = 1;
$nbEspace = $nbLigne-1;

while ($ligne<=$nbLigne) {
    echo str_repeat(" ", $nbEspace);
	echo str_repeat("*", $nbCarractere);
	$nbCarractere = $nbCarractere + 2;
	echo "\n";
	$ligne++;
	$nbEspace--;
}


$nbEspace=1;
while ($ligne>2) {
    echo str_repeat(" ", $nbEspace);
    $nbCarracteres = $nbCarractere-4;
	echo str_repeat("*", $nbCarracteres);
	$nbCarractere = $nbCarractere - 2;
	echo "\n";
	$ligne--;
	$nbEspace++;
}
?>