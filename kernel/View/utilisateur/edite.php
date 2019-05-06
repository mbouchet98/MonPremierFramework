<h1>utilisateur Modifier<h1>

  <?php
  foreach ($users as $key => $value) {
    // code...
    extract($value);
   }
     echo  'L utilisateur '.$nom.' '. $prenom.' '.$email.' '.$age. ' a bien été Modifier';

     $chemin = WEBROOT.'utilisateur/';
     echo "<h4><a href = '$chemin'>Retoure a l'accueil</a><h4>";

  ?>
