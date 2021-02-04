 <?PHP
   $mot ="informatique";
   $reponse = False;
   $lettreChoisi = readline("Lettre choisi : ");
   $i = 0;
   $longueurDuMot = strlen($mot);
   $longueurDuMot--;
   while ($i <= $longueurDuMot) {
   	echo ( $mot[$i] ."\n");
   	if ($mot[$i] == $lettreChoisi) {
   		$reponse = True;
   	}
   	$i++;
   }
  print("\n");
  if ($reponse != True) {
  	print("$lettreChoisi ne fais pas partie du mot");
  }
  else{
  	print("$lettreChoisi fais partie du mot");
  }
  ?>