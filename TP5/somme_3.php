<?php
$result = 0;
$i = readline("Votre nombre de début : ");
$fin = readline("Votre nombre de fin : ");
for ($i; $i <= $fin; $i++) { 
	$result = $i + $result;
}
print($result);
?>