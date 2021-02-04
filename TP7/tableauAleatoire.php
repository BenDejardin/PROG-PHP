<?php
$stack = array();
$i = 0;
for ($j=0; $j < 15 ; $j++) { 
	$chiffreAleatoire = rand(0, 100);
	array_push($stack, $chiffreAleatoire);
	sort($stack);
}
for ($i=0; $i < 15 ; $i++) {
	print($stack[$i] ."\t");
}
?>