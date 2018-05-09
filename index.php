<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>
    <?php require_once('views/cargador.php'); ?>
    <?php 
    if(isset($_REQUEST['content'])){
      require_once('views/header.php');
    }

    if(!isset($_REQUEST['content'])){

      require_once('views/login.php');

    }elseif($_REQUEST['content']=='ruta-virtual'){

      require_once('views/ruta-virtual.php');

    }elseif($_REQUEST['content']=='inicio'){

      require_once('views/inicio.php');

    }elseif($_REQUEST['content']=='campamento-alistamiento'){

      require_once('views/campamento-alistamiento.php');

    }elseif($_REQUEST['content']=='alistamiento'){

      require_once('views/alistamiento.php');

    }elseif($_REQUEST['content']=='campamento-base'){

      require_once('views/campamento-base.php');

    }elseif($_REQUEST['content']=='campamento-uno'){

      require_once('views/campamento-uno.php');

    }elseif($_REQUEST['content']=='campamento-dos'){

      require_once('views/campamento-dos.php');

    }elseif($_REQUEST['content']=='formulacion-de-proyecto'){ 
 
      require_once('views/formulacion-de-proyecto.php');

    }elseif($_REQUEST['content']=='agregar-actividad'){

      require_once('views/agregar-actividad.php');

    }elseif($_REQUEST['content']=='cronograma-base'){

      require_once('views/cronograma-base.php');

    }elseif($_REQUEST['content']=='cursos'){

      require_once('views/cursos.php');

    }elseif($_REQUEST['content']=='perfil'){

      require_once('views/perfil.php');

    }else{

      require_once('views/login.php');

    } 
    

    if(isset($_REQUEST['content'])){
      require_once('views/footer.php');
    }

    ?>

  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>
</html>
