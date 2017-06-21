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


  <!-- Add jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

  <!--script src="https://cdn.jsdelivr.net/mediaelement/latest/mediaelement-and-player.min.js"></script-->
  <script src="js/lightgallery.min.js"></script>
  <script src="js/lg-fullscreen.min.js"></script>
  <script src="js/lg-thumbnail.min.js"></script>
  <script src="js/lg-video.min.js"></script>
  <script src="js/lg-autoplay.min.js"></script>
  <script src="js/lg-zoom.min.js"></script>
  <script src="js/lg-hash.min.js"></script>
  <script src="js/lg-pager.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.7/hammer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.5.4/blazy.min.js"></script>
  <script>
  var consulta = window.matchMedia('(max-width: 768px)');
    consulta.addListener(mediaQuery);

    var $burguerButton = document.getElementById('burguer-button');
    var $menu = document.getElementById('menu');
    function toggleMenu(){
      $menu.classList.toggle('active')
      $burguerButton.classList.toggle('icon-close'); 
    };
    function showMenu(){
      $menu.classList.add('active');
      $burguerButton.classList.add('icon-close');
    };
    function hideMenu(){
      $menu.classList.remove('active');
      $burguerButton.classList.remove('icon-close');
    };

    function mediaQuery() {
      if (consulta.matches) {
          // si se cumple hagamos esto
          console.log('se cumplió la condicion');
          $burguerButton.addEventListener('touchstart', toggleMenu);
        } else {
          $burguerButton.removeEventListener('touchstart', toggleMenu);
          // si no se cumple hagamos esto
          console.log('no se cumplió la condicion');
        }
      }
      mediaQuery();

      // lazy loading
      var bLazy = new Blazy({
        selector: 'img'
      });

      // Gestos touch
      var $body = document.body;

      var gestos = new Hammer($body);
      gestos.on('swipeleft', hideMenu);
      gestos.on('swiperight', showMenu);
    </script>
    <script src="js/main.js"></script>
  </body>
  </html>
