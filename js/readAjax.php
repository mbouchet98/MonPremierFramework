 <?php
 require_once(APP."model.php");

if(isEmpty($_POST['vil_cp'])){
  $select1 = document.getElementById('select1').value;
  alert($select1);
  $query = $db->query("select * from ville where vil_cp = $select1")
  $rowCount = $query->num_rows;
  if($rowCount > 0){
    echo "<option value="">ville lib</option>";
    while ($row = $query->FETCH_ASSOC()) {
      echo '<option value="'.$row['vil_id'].'">'.$row['vil_libelle'].'</option>';
    }
  }else {
    echo "pas de ville corespondante";
  }
}




 ?>
