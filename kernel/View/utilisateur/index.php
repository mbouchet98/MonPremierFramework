<H1>
Les utilisateurs
<br>
</H1>
<br>
<?php
$chemin3 = WEBROOT.'utilisateur/create/';
$chemin = WEBROOT.'utilisateur/read/';
$chemin2 = WEBROOT.'utilisateur/delete/';
// creer un lien en concaténent
// recup data nom et prenom pour le lien

echo "<a href='$chemin3'>Ajouter</a><br/>";



foreach ($users as $k => $v) {
  foreach ($v as $key => $val){
    if ($key == "id") {
      $id = $val;
    }
    if ($key == "nom") {
      $nom = $val;
    }
    if ($key == "prenom") {
      $prenom = $val;

    }

  }
  ?><a href=<?php echo $chemin.$id.'>'. $nom.' '. $prenom . " </a>";
  echo " <a href='$chemin2$id'>delete</a><br/>";
}
?>
