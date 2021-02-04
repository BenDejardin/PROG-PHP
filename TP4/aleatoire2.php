<?php
$continuer = "o";
$essai = 0;
while($continuer == "o"){
	$chiffreMax = readline("Chiffre aléatoire entre 0 et ? : \n");
	$val = rand(0,$chiffreMax);
		do{
			$reponse = readline ("Votre proposition : \n");
			
			$essai ++; 
	
			if ($reponse < $val){
				print("Plus (+) \n");
			}
			elseif($reponse > $val){
				print("Moins (-) \n");
			}
			print("Nombre d'essai : $essai \n");
		}
		
		while ($reponse != $val and $essai != 6);

	if ($essai == 5){
		print("Perdu !! \n");
		print("Le nombre étais : $val \n");
	}
	else {
		print("Gagner !! \n");
		print("Le nombre est donc : $val \n");
	}

	$continuer = readline ("Voulez vous recommencer ? (o/n) \n");
	if($continuer == "o"){
		$essai = 0 ; 
	}
}
?>