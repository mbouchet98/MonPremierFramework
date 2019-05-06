<?php
/**
 *
 */
abstract class model
{
  protected $table;
  protected $primary;
  protected $array_sys=array('table','primary','array_sys');

  function __construct($table, $primary)
  {
      // code...
    $this->table = $table;
    $this->primary = $primary;
  }

  public function co(){
    $db = new PDO('pgsql:host=sio-sql;port=5432;dbname=mbouchet;user=mbouchet;password=chevaldu17');
    return $db;
  }
// pour chaque class qui héritera de la classe mère il faut trouver un fetch
// qui s'adpate a tout les class pour permettre de les afficher.
// SELECT
  public function read($id)
  {
     $con = $this->co();
     $table = $this->table;
     $primary = $this->primary;
     $sql = "select * from $table where $primary = $id";
     $res = $con->query($sql);
      //echo "La requete est : ",$sql,"  \n  ";
     $resu = $res->fetch(PDO::FETCH_ASSOC);
    //  print_r($resu);
      foreach($resu as $k => $v) {
          $this->$k =  $v;
          //echo $this->$k;
      }
    //  echo $resu;
     $con = null;

   }
// select list
public function readAll()
{
   $con = $this->co();
   $table = $this->table;
   //$primary = $this->primary;
   $sql = "select * from $table";
   $res = $con->query($sql);
  //  echo "La requete est : ",$sql,"  \n  ";
   while($resu = $res->fetch(PDO::FETCH_ASSOC)) {
     //print_r($resu);
     foreach($resu as $k => $v) {
         $this->$k =  $v;
         //echo $this->$k;
     }
   }

    //echo $resu;
   $con = null;

 }



// DELETE
  public function delete($id)
  {
    $con = $this->co();
    $table = $this->table;
    $primary = $this->primary;
    $sql = "delete from  $table where $primary = $id";
    echo $sql;
    $con->exec($sql);
    $con = null;
  }

// INSERT
  public function create(){
    $con = $this->co();
    //print_r($this);
    $col='';
    $val = '';
    $pri = $this->primary;
    $sql = "INSERT INTO $this->table ";
    foreach ($this as $key => $value) {
        if(!in_array($key,$this->array_sys) AND $key != $pri) {
          // code...
          $col = $col . "$key ," ;
          //echo $key , " = ", $value;
          $val = $val . "'$value' ," ;
        }
    }

    $col = substr($col,0,-1);
    $val = substr($val,0,-1);

    $sql .= "(".$col .") VALUES (".$val .");";
    echo $sql;

    $con->exec($sql);
    $con = null;
  }

// UPDATE
  public function update($idRec){
    $con = $this->co();
    $col='';
    $val = '';
    $req = '';
    $pri = $this->primary;
    $sql = "UPDATE $this->table SET";
    foreach ($this as $key => $value) {
        if(!in_array($key,$this->array_sys) AND $key != $pri) {

          // concaténation des valeurs. d'ou le mauvais affichage
          $col = $key;

          $val =$value;

          $req = $req . "$col = '$val',";
        }
    }

    $col = substr($col,0,-1);
    $val = substr($val,0,-1);
    $req = substr($req,0,-1);

    $sql .= " $req WHERE $pri = $idRec";
    echo $sql;

    $con->exec($sql);
    $con = null;
  }

  // VUE
  public function vus(){
    $con = $this->co();
    $table = $this->table;
    $primary = $this->primary;
    $sql = "create view vus_"+$table+" as select * from $table";
    echo $sql;
    $res = $con->query($sql);
    echo "La requete est : ",$sql,"  \n  ";
    $sql2 = "select * from vus_"+$table+"";
    $res = $con->query($sql2);
    echo "La requete est : ",$sql,"  \n  ";
    //$resu = $res->fetch(PDO::FETCH_ASSOC);
    //  print_r($resu);
    // foreach($resu as $k => $v) {
      //   $this->$k =  $v;

    while($row =  $res->fetch(PDO::FETCH_ASSOC)){
      echo "<td>";
      echo $row;
      echo "</td>";
    }

    $con = null;
  }

  public function find() {
    $sql = "SELECT * from ".$this->table;
    $con = $this->co();
    $res = $con->query($sql);
    while($row =  $res->fetch(PDO::FETCH_ASSOC)){
      $tmp[] = $row;
    }
    return $tmp;
  }

  public function teTable(){
    $nom = get_class($this);
    $tmp = array();
    foreach($this as $k => $v) {
      $tmp[$k]= $v;
    }
    $data = array();
    $data[$nom] = $tmp;
    return $data;
  }

  public function edite(){
    foreach($_POST as $k => $v) {
      $this->$k = $v;
    }
  }

}


 ?>
