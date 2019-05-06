<?php
/**
 *
 */
 require_once(APP."model.php");
class ville extends model
{
  public $vil_id;
  public $vil_cp;
  public $vil_libelle;

  function __construct()
  {
    // code...
    parent::__construct('ville', 'vil_id');
    $this->vil_id = "";
    $this->vil_cp = "";
    $this->vil_libelle = "";
  }

  public function __getCp()
  {
    return $this->vil_cp;
  }

  public function __setCp($cp)
  {
    $this->vil_cp = $cp;
  }
  public function __getlibelle()
  {
    return $this->vil_libelle;
  }

  public function __setlibelle($libelle)
  {
    $this->vil_libelle = $libelle;
  }
}
 ?>
