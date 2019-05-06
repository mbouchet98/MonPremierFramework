<h1>utilisateur Supprimer<h1>

  <?php
  foreach ($users as $key => $value) {
    // code...
    extract($value);
   }
     echo  'L utilisateur '.$nom.' '. $prenom.' '.$email.' '.$age. ' a bien été supprimer';

     $chemin = WEBROOT.'utilisateur/';
     echo "<h4><a href = '$chemin'>Retoure a l'accueil</a><h4>";
  ?>
