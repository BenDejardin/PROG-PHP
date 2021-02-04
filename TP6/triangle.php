<?PHP
$nbLigne = readline("Entrer un nombre de ligne : "); 
for($i=1;$i<=$nbLigne;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		print("*");
	}
	print("\n");
}
?>