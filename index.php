<!DOCTYPE html>
<html lang="es">
   <?php require_once('blocks/head.php'); ?>
   <body>
    <?php require_once('blocks/header.php'); ?>
    <section class="main">
                  <?php if(!isset($_REQUEST['content'])){
                      require_once('blocks/home.php');
                    }elseif($_REQUEST['content']=='musica'){
                      require_once('blocks/musica.php');
                    }elseif($_REQUEST['content']=='juegos'){
                      require_once('blocks/juegos.php');
                    }elseif($_REQUEST['content']=='apps'){
                      require_once('blocks/apps.php');
                    }elseif($_REQUEST['content']=='tonos'){
                      require_once('blocks/tonos.php');
                    }elseif($_REQUEST['content']=='imagenes'){
                      require_once('blocks/imagenes.php');
                    }elseif($_REQUEST['content']=='graffitis'){
                      require_once('blocks/graffitis.php');
                    }elseif($_REQUEST['content']=='descargas'){
                      require_once('blocks/descargas.php');
                    }else{
                      require_once('blocks/home.php');
                    } 
                  ?>
      <?php require_once('blocks/footer.php'); ?>
    </section>
   </body>
</html>
