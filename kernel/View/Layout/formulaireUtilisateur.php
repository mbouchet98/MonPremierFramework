
  <script type="text/javascript">
//alert("pwet");
//    $("#select1").on('onChange',function(){
    function() {
      alert("pwet");
      var select1 = document.getElementById('select1').value;
      alert(select1);
      var select1 = (this).val();
      if (select1) {
        $.ajax({
          type:'POST',
          url:'readAjax.php'
          data:'select1='+select1,
          success:function(html){
          $("#select2").html(html);
          }
        });
      }
    });
  });
  </script>



        <form action="<?php echo".$path.";?>" method="POST">
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

        <select name="cp" id="select1" onChange=function();>
        <?php foreach ($mesvilles as $k => $v) {
          // code...
          $cle = $v['vil_id'];
          $vcp = $v['vil_cp'];
          echo "<option id=".$cle.">".$vcp."</option>";
        }?>
        </select>
        <span class="error" id="cpError"></span>
        <br/>
        <label>  Nom Ville : </label>
        <select name="cp" id="select2" >
        <?php foreach ($mesvilles as $key => $value) {
          // code...
          $k = $value['vil_id'];
          $vlib = $value['vil_libelle'];
          echo "<option id=".$k.">".$vlib."</option>";
        }?>
        </select>
        <span class="error" id="libError"></span>

        <div>
        <!--<?php
        /*  if(isset($_POST['vil_cp'])){
            $select1 = $_POST['vil_cp'];
            $query = $db->query("select * from ville where vil_cp = $select1")
            $rowCount = $query->num_rows;
            if($rowCount > 0){
              echo "<option value="">ville lib</option>";
              while ($row = $query->FETCH_ASSOC()) {
                echo '<option value="'.$row['vil_id'].'">'.$row['vil_libelle'].'</option>';
              }
            }else {
              echo "pas de ville correspondante";
            }

          }*/
         ?>-->

        </div>
        <br/>
        <input type="submit" value="Enregistrer" id="btnUpdate" onclick=" return myFunction()" />
        </form>
