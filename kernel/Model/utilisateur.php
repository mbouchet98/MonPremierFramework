<?php
/**
 *
 */
 require_once(APP."model.php");
 //require_once(WEBROOT.'ville');
// require_once(MODEL."ville.php");


class utilisateur extends model
{

  // attribet en private
  protected $id;
  protected $nom;
  protected $prenom;
  protected $age;
  protected $email;
  protected $ville;

/*mettre un public devant les fonction*/
 public function __construct()
  {
    parent::__construct('utilisateur', 'id');
    $this->id = "";
    $this->nom = "";
    $this->prenom = "";
    $this->age = "";
    $this->email = "";
    $this->ville = "";
  }

  // __getter & __setter

  public function __getNom()
  {
    return $this->nom;
  }

  public function __setNom($nom)
  {
    $this->nom = $nom;
  }

  public function __getPrenom()
  {
    return $this->prenom;
  }

  public function __setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }
  public function __getAge()
  {
    return $this->age;
  }

  public function __setAge($age)
  {
    $this->age = $age;
  }
  public function __getEmail()
  {
    return $this->email;
  }

  public function __setEmail($email)
  {
    $this->email = $email;
  }

  public function __getVille(){
    return $this->ville;
  }

  public function __setVille($ville){
    $this->ville = $ville;
  }

  // read readline_complet
  public function read($id) {
    parent::read($id);
    $idville = $this->idville;
    $this->ville = new ville();
    $this->ville->read($idville);
  }
}

?>
