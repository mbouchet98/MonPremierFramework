<?php
/**
 *
 */
 $path = APP.'controller.php';
 require_once("$path");
class CTRLaccueil extends Controller
{
  public function index(){
    $this->render('index');
  }
}
 ?>
