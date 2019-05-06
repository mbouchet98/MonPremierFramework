<H1>
Les villes
<br>
</H1>
<br>
<?php
$chemin3 = WEBROOT.'ville/create/';
$chemin = WEBROOT.'ville/read/';
$chemin2 = WEBROOT.'ville/delete/';
// creer un lien en concaténent
// recup data nom et prenom pour le lien

echo "<a href='$chemin3'>Ajouter</a><br/>";



foreach ($ville as $k => $v) {
  foreach ($v as $key => $val){
    if ($key == "vil_id") {
      $id = $val;
    }
    if ($key == "vil_cp") {
      $cp = $val;
    }
    if ($key == "vil_libelle") {
      $libelle = $val;

    }

  }
  ?><a href=<?php echo $chemin.$id.'>'. $cp.' '. $libelle . " </a>";
  echo " <a href='$chemin2$id'>delete</a><br/>";
}
?>
