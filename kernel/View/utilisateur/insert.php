<h1>utilisateur Ajouter<h1>

  <?php
  foreach ($users as $key => $value) {
    // code...
    extract($value);
   }
     echo  'L utilisateur '.$nom.' '. $prenom.' '.$email.' '.$age. ' a bien été Ajouter';

     $chemin = WEBROOT.'utilisateur/';
     echo "<h4><a href = '$chemin'>Retoure a l'accueil</a><h4>";

  ?>
