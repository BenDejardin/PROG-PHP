<?php

	$chomage = array( 'Autriche' =>4.9, 'Allemagne' =>9.3 , 'Danemark' =>4.8 , 'Espagne' =>9.4 ,'France' =>9.7);
	$paysMoins5Pourcent = [];
	$valueMin = 100; 
	$paysMoinsChommage = "";

		 echo "\n";
		 echo "Chomage en Europe : \n";
		 foreach ($chomage as $key => $value) {
		 	echo "$key : $value % \n";

		 	if ($value < 5) {
		 	$paysMoins5Pourcent [] = $key;
		 	}

		 	if ($value < $valueMin) {
		 		$valueMin = $value;
		 		$paysMoinsChommage = $key;
		 	}
		 }

		 echo "\n";

		 echo "Pays Européens avec -5% de chomage : \n";
		 foreach ($paysMoins5Pourcent as $keys => $valeur) {
		 	echo "$valeur \n";
		 }

		 echo "\n";

		 echo "Pays Européens avec le moins de chomage : \n";
		 echo "$paysMoinsChommage";

?>