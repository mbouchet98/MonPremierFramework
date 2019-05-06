<?php

Class Controller {
  //attributes
  protected $viewvar = array();

  //methods
  public function LoadModel($model){
    require(MODEL.$model.'.php');
    $this->$model = new $model();
  }

  public function set($v) {
    $this->viewvar = array_merge($this->viewvar, $v);
  }

  public function render($view) {
    extract($this->viewvar);
    ob_start();
    $classe = str_replace('CTRL','',get_class($this));
    require(VIEW.$classe.'/'.$view.'.php');
    $content = ob_get_clean();
    require(VIEW.'Layout/interface.php');
  }

}

 ?>
