<?php
$var = 0;
$var2 = readline("Votre somme de fin : ");
while ($var2 != 0 ){
	$var = $var + $var2;
	$var3 = $var + $var2;
	$var2 = $var2 - 1;
}
print("$var3 \n");
?>