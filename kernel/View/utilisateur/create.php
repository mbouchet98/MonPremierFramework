<h1>Ajouter un utilisateur</h1>
<?php
  $path = WEBROOT."utilisateur/insert/";
  require(VIEW.'Layout/formulaireUtilisateur.php');
  /*  $nameError ="";
    $prenomError ="";
    $emailError ="";
    $ageError ="";

    if(isset($_POST['submit'])){
      if(empty($_POST["nom"])){
        $nameError = "Veuillez saissir le champ Nom.";
      }
      else {
        $name = test_input($_POST["nom"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Seul les lettres sont autorisés.";
        }
      }
    }*/



  /*  echo  '<form action="'.$path.'" method="POST">
    <label>Nom : </label>
    <input class="inp" type="text" id="nom" name="nom" />
    <span class="error" id="nameError"></span>
    <br/>
    <label>  Prenom : </label>
    <input class="inp" type="text" name="prenom" id="prenom"/>
    <span class="error" id="prenomError"></span>
    <br/>
    <label> Email: </label>
    <input class="inp" type="text" name="email"  id="email"/>
    <span class="error" id="emailError"></span>
    <br/>
    <label>Age : </label>
    <input class="inp" type="text" name="age" id="age" >
    <span class="error" id="ageError"></span>
    <br/>
    <label>  Code Postal : </label>

    <select name="cp" id="select1">';

//print_r($mesvilles);
    //foreach ($lesvilles as $key => $value) {
    foreach ($mesvilles as $k => $v) {
      // code...
      $cle = $v['vil_id'];
      $vcp = $v['vil_cp'];
      echo "<option id=".$cle.">".$vcp."</option>";
    }
      // code...
  //  }

    echo '
    </select>
    <!--<input class="inp" id="vil_cp" type="text" name="vil_cp" />-->
    <span class="error" id="cpError"></span>
    <br/>
    <label>  Nom Ville : </label>
    <select name="cp" id="select2" >';
    foreach ($mesvilles as $key => $value) {
      // code...
      $k = $value['vil_id'];
      $vlib = $value['vil_libelle'];
      echo "<option id=".$k.">".$vlib."</option>";
    }
    echo '</select>
    <!--<input class="inp" id="vil_libelle" type="text" name="vil_libelle"></input>-->
    <span class="error" id="libError"></span>
    <br/>
    <input type="submit" value="Enregistrer" id="btnUpdate" onclick=" return myFunction()" />
    </form>';*/

// ajouter des champ pour la ville.


?>
<!-- /^([w-.]+@([w-]+.)+[w-]{2,4})?$/ -->
<script type="text/javascript">

function myFunction(){
    var nom, prenom, email, age;
    var nameError, prenomError, emailError, ageError;
    var variableF;
    var cp, libelle;
    var cpError, libError;
    var variableF;

    cp = document.getElementById("vil_cp").value;
    libelle = document.getElementById("vil_libelle").value;
    nom = document.getElementById("nom").value;
    prenom = document.getElementById("prenom").value;
    email = document.getElementById("email").value;
    age = document.getElementById("age").value;

    var expNom =  new RegExp("[a-zA-Z ]");

    if(nom == ""){
      nameError = "* Veuillez saisir le champ correctement";
      document.getElementById("nameError").innerHTML = nameError;
      return variableF = false;
    }
    if (nom.match(expNom)==null) {
      nameError = "* Veuillez saisir le champ avec des lettres";
      document.getElementById("nameError").innerHTML = nameError;
      return variableF = false;
    }


    if (prenom == "") {
      prenomError = "* Veuillez saisir le champ correctement";
      document.getElementById("prenomError").innerHTML = prenomError;
      return variableF = false;
    }
    if (prenom.match(expNom)==null) {
      prenomError = "* Veuillez saisir le champ avec des lettres";
      document.getElementById("prenomError").innerHTML = prenomError;
      return variableF = false;
    }

    var expEmail =  new RegExp("[a-zA-Z0-9\-_\.]+@[a-z0-9]+\.[a-z]{2,5}");
    if (email == "") {
      emailError = "* Veuillez saisir le champ correctement";
      document.getElementById("emailError").innerHTML = emailError;
      return variableF = false;
    }
    if (email.match(expEmail)==null) {
      emailError = "* Veuillez saisir le champ sous la forme de example@gmail.com";
      document.getElementById("emailError").innerHTML = emailError;
      return variableF = false;
    }

    var expAge =  new RegExp("[0-9]{2}\/[0-9]{2}\/[0-9]{4}");
    if (age == "") {
        ageError = "* Veuillez saisir le champ correctement";
        document.getElementById("ageError").innerHTML = ageError;
        return variableF = false;
    }
    if (age.match(expAge)==null) {
      ageError = "* Veuillez saisir le champ sous la forme de dd/mm/yyyy";
      document.getElementById("ageError").innerHTML = ageError;
      return variableF = false;
    }

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


function cascade(){

}
</script>
