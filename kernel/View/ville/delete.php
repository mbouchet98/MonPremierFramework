<h1>ville Supprimer<h1>

  <?php
  foreach ($ville as $key => $value) {
    // code...
    extract($value);
   }
     echo  'L utilisateur '.$vil_cp.' '. $vil_libelle.' a bien été supprimer';

     $chemin = WEBROOT.'ville/';
     echo "<h4><a href = '$chemin'>Retoure a l'accueil</a><h4>";
  ?>
