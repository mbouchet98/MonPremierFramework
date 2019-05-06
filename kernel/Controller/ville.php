<?php
/**
 *
 */
 require_once(APP."controller.php");
class CTRLville extends Controller
{
  public function index(){
    $this->LoadModel('ville');
    $data = array("ville" => $liste = $this->ville->find());
    $this->set($data);
    $this->render('index');
  }

  public function read($id){
    $this->LoadModel('ville');
    $this->ville->read($id);
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
    $this->render('read');
  }

  public function update($id){
    $this->LoadModel('ville');
    $this->ville->read($id);
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
    $this->render('update');
  }

  public function edite($id){
    $this->LoadModel('ville');
    $modif = $this->ville->edite();
    $this->ville->update($id);
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
    $this->render('edite');
  }

  public function delete($id){
    $this->LoadModel('ville');
    $this->ville->read($id);
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
    $this->ville->delete($id);
    $this->render('delete');
  }

  public function insert(){
    $this->LoadModel('ville');
    $modif = $this->ville->edite();
    $this->ville->create();
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
    $this->render('insert');
  }

  public function create(){
    $this->LoadModel('ville');
    //$modif = $this->utilisateur->edite();
    //$this->utilisateur->create();
    $liste = $this->ville->teTable();
    $data = array("ville" => $liste );
    $this->set($data);
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
