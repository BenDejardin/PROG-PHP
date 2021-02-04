 <?PHP
   $mots = str_split("baobab");
   $reponse = False;
   $liste = [];
   $i = 0;
   $longueurDuMot = count($mots);
   $lettreChoisi = readline("Lettre choisi : ");

   foreach ($mots as $key => $value) {
      if ($lettreChoisi == $value) {
        $liste [] = $value;
        }
      else{
       $liste [] = "#";
      }
   }
foreach ($liste as $values) {
        echo "$values";
      }

  ?>