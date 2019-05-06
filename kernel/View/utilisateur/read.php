<h1> Affiche de l'utilisateur</h1>
<?php
$chemin = WEBROOT.'utilisateur/update/';
foreach ($users as $key => $value) {
  // code...
  extract($value);
 }
   echo  $nom.' '. $prenom.' '.$email.' '.$age.' '.$ville->vil_cp.' '.$ville->vil_libelle ;

?>
<br/>
<a href=<?php echo $chemin.$id.">Update</a>";

$chemin2 = WEBROOT.'utilisateur/';
echo "<h4><a href = '$chemin2'>Retoure a l'accueil</a><h4>";
?>
