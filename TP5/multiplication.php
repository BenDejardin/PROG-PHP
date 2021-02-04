<?php

$nbChoisi = readline("Nombre choisi : ");
for ($i=1; $i <= 10; $i++) { 
	$resul = $nbChoisi * $i;
	print("$nbChoisi x $i = $resul\n");
}

?>