<?php
$result = 0;
$fin = readline("Votre nombre de fin : ");
for ($i=0; $i <= $fin; $i++) { 
	$result = $i + $result;
}
print($result);
?>