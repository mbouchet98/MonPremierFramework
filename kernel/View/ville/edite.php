<h1>ville Modifier<h1>

  <?php
  foreach ($ville as $key => $value) {
    // code...
    extract($value);
   }
     echo  'La ville '.$vil_cp.' '. $vil_libelle.' a bien été Modifier';

     $chemin = WEBROOT.'ville/';
     echo "<h4><a href = '$chemin'>Retoure a l'accueil</a><h4>";

  ?>
