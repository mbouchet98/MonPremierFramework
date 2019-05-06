<h1>Modifier la ville</h1>
<?php

foreach ($ville as $key => $value) {
  // code...
  extract($value);
 }
  $path = WEBROOT."ville/edite/".$vil_id;
   echo  '<form action="'.$path.'" method="POST">
   <label>Code Postal : </label>
   <input class="inp" type="text" id="vil_cp" name="vil_cp" value='.$vil_cp.' />
   <span class="error" id="cpError"></span><br/>
   <br/>
   <label>  Nom ville : </label>
   <input class="inp" id="vil_libelle" type="text" name="vil_libelle" value='.$vil_libelle.' />
   <span class="error" id="libError"></span>
   <br/>
  <input type="submit" value="Enregistrer" id="btnUpdate" onclick="return myFunction()"></input></form>';


?>

<script>

function myFunction(){
    var cp, libelle;
    var cpError, libError;
    var variableF;

    cp = document.getElementById("vil_cp").value;
    libelle = document.getElementById("vil_libelle").value;



    var expcp =  new RegExp("[0-9]{5,5}");
    if (cp == "") {
        cpError = "* Veuillez saisir le champ correctement";
        document.getElementById("cpError").innerHTML = cpError;
        return variableF = false;
    }
    if (cp.match(expcp)==null) {
      cpError = "* Veuillez saisir le champ sous la forme de ex: 17963";
      document.getElementById("cpError").innerHTML = cpError;
      return variableF = false;
    }


        var explibelle =  new RegExp("[a-zA-Z]");

        if(libelle == ""){
          libError = "* Veuillez saisir le champ correctement";
          document.getElementById("libError").innerHTML = libError;
          return variableF = false;
        }
        if (libelle.match(explibelle)==null) {
          libError = "* Veuillez saisir le champ avec des lettres";
          document.getElementById("libError").innerHTML = libError;
          return variableF = false;
        }
}
</script>
