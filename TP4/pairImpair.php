<?php
$var = readline("Entrer votre nombre : ");
$res = $var % 2;
$var2 = $var + 20;
if ($res == 1){
	print("impaire \n");
}
else {
	print("pair \n");
}
while ($var != $var2) { 
	print("$var \n");
	$var = $var + 2;
}
?>