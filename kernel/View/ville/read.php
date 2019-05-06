<h1> Affiche de la ville</h1>
<?php
$chemin = WEBROOT.'ville/update/';
foreach ($ville as $key => $value) {
  // code...
  extract($value);
 }
   echo  $vil_cp.' '. $vil_libelle;

?>
<br/>
<a href=<?php echo $chemin.$vil_id.">Update</a>";

$chemin2 = WEBROOT.'ville/';
echo "<h4><a href = '$chemin2'>Retoure a l'accueil</a><h4>";
?>
