<?php
	$jours = readline ("Votre jour de naissance : ");
	$mois = readline ("Votre mois de naissance : ");
	$annee = 2020;
	$anciennedate = date("$jours-$mois-$annee");
	$datedujour = date("d-m-Y");
	$jmoins = strtotime($anciennedate) - strtotime($datedujour);
	$jmoins = round($jmoins / (60*60*24));
	if ($jmoins < 0){
		$jmoins = $jmoins + 365;
		}
	echo ("Nous somme le $datedujour votre anniversaire  sera dans $jmoins jours");
?>