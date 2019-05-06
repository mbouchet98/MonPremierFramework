<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href= <?php echo CSS."style.css"; ?> >
  <title>Work in progress</title>
</head>

<body>
  <div class="main">
    <div class="ban">
    </div>

    <div class="content">
      <div class="menu">

      </div>
      <div class="maincontent">

          <?php

            echo $content;

/*		print_r($_GET);
          // Class utilisateur

          /*  require('utilisateur.php');
            $p = new utilisateur();
// select
            $p->read(17);
            print_r($p);

// delete
            $p->delete(28);
// create
            $p->__setNom('moi');
            $p->__setPrenom('moi');
            $p->__setAge('1/1/2001');
            $p->__setEmail('moi@moi.moi');
            $p->create();
// update
            $p->__setNom('test');
            $p->__setPrenom('test');
            $p->__setAge('1/1/2001');
            $p->__setEmail('test@test.test');
            $p->update(1);*/

// Class Ville
/*            require('ville.php');
            $v = new ville();
  // select
            $v->read(1);
            print_r($v);
  // delete
            $v->delete(17);
  // create
            $v->__setCp('33000');
            $v->__setlibelle('Bordeaux');
            $v->create();
  // update
            $v->__setCp('33670');
            $v->__setlibelle('Créon');
            $v->update(18)
*/          ?>

      </div>
    </div>

    <div class="footer">

    </div>
  </div>
</body>
