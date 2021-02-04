<?php

$nbLigne = readline("Nombre de ligne : ");
$ligne = 1;
$nbEspace = $nbLigne-1;
$nbEspaceInterne = 1;

echo str_repeat(" ", $nbEspace);
echo "*";
echo "\n";
$ligne++;
$nbEspace--;

while ($ligne<$nbLigne){
    echo str_repeat(" ", $nbEspace);
	echo "*";
	echo str_repeat(" ", $nbEspaceInterne);
	$nbEspaceInterne = $nbEspaceInterne + 2;
	echo "*";
	echo "\n";
	$ligne++;
	$nbEspace--;
}
echo str_repeat("*", 2*$nbLigne-1);

?>