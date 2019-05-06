<?php
/**
 *
 */
 require_once(APP."controller.php");
 require_once(CONTROLLER."ville.php");

class CTRLutilisateur extends Controller
{

  public function index(){
    $this->LoadModel('utilisateur');
    $data = array("users" => $liste = $this->utilisateur->find());
    $this->set($data);
    $this->render('index');
  }

  public function read($id){
    $this->LoadModel('utilisateur');
    $this->utilisateur->read($id);
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);
    $this->render('read');


// il faut récupperrai la clé étrangère dans utilisateur de ville car $id n'est pas l'id de ville.
    $this->LoadModel('ville');
    $this->ville->read($this->utilisateur->idville);
    $listeVille = $this->ville->teTable();
    $data2 = array("ville" => $listeVille );
    $this->set($data2);
    $this->render('read');
  }

  public function delete($id){
    $this->LoadModel('utilisateur');
    $this->utilisateur->read($id);
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);
    $this->utilisateur->delete($id);
    $this->render('delete');
  }

  public function update($id){
    $this->LoadModel('utilisateur');

    $this->LoadModel('ville');
    $this->utilisateur->read($id);
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);


    //il faut pouvoir réccuperrai tout les données de l'objet ville.
    $lesvilles = $this->ville->find();
    $data2 = array("mesvilles" => $lesvilles );
    $this->set($data2);
    $this->render('update');
  }

  public function edite($id){
    $this->LoadModel('utilisateur');
    $modif = $this->utilisateur->edite();
    $this->utilisateur->update($id);
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);
    $this->render('edite');
  }

  public function insert(){

    $this->LoadModel('ville');
    $modif = $this->utilisateur->edite();
    $this->utilisateur->create();
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);
    $this->render('insert');


  }


  public function create(){
    $this->LoadModel('utilisateur');

    $this->LoadModel('ville');
    //$modif = $this->utilisateur->edite();
    //$this->utilisateur->create();
    $liste = $this->utilisateur->teTable();
    $data = array("users" => $liste );
    $this->set($data);


    //il faut pouvoir réccuperrai tout les données de l'objet ville.
    $mesvilles = $this->ville->find();
    $data2 = array("mesvilles" => $mesvilles );

    $this->set($data2);
    $this->render('create');
  }

  public function readAll()
  {
    // code...
    $this->LoadModel('ville');
    $this->ville->readAll();
    $liste = $this->ville->teTable();
    $data = array("mesvilles" => $liste );
    $this->set($data);
    $this->render('read');
  }
}
 ?>
