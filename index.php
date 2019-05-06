<?php
/*les constantes de path*/
define("ROOT",str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define("WEBROOT",str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define("APP",ROOT . 'kernel/');
define("MODEL",APP . 'Model/');
define("CONTROLLER",APP . 'Controller/');
define("VIEW",APP . 'View/');
define("CSS",WEBROOT.'css/');

/* Gestion des controllers pour préparer les appels */

if (empty($_GET)) {
  $controller = 'accueil';
  $params = array();
} else {
  $params = explode('/', $_GET['p']);
  $controller = $params[0];
}

/*Gestion des méthodes */

if(!empty($params[1])) {
  $action = $params[1];
} else {
  $action = 'index';
}

require(CONTROLLER.$controller.'.php');
$controller = 'CTRL'.$controller;
$controller = new $controller();
if (method_exists($controller, $action)) {
  // code...
  unset($params[0]);
  unset($params[1]);
  call_user_func_array(array($controller,$action),$params);
}
else {
  // code...
  echo "blablabla";
}
?>
