<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - <?php echo $_GET['url'] ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/Img/meta-logo.png">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/stylesUser.css">
</head>

<body>
  <?php
  if (isset($_SESSION['Logged'])) {
    if ($_SESSION['rol'] == 0) {
      echo '
      <ul>
        <li><a href="?url=home">Inicio</a></li>
        <li><a href="?url=catalogo">Catalogo</a></li>
        <li><a href="?url=nosotros">Sobre Nosotros</a></li>
        <li><a href="?url=contacto">Contacto</a></li>
      ';
      if (isset($_SESSION['Logged'])) {
              echo '
              <li class="form-sesion">
                <a href="?url=Logout">Cerrar Sesión</a>
              </li>';
            }
          echo '
          </ul>
        </div>
      </div>
    </nav>';
    }else{
      include '../views/admin/admin.php';
    }
  }
  
  ?>

  <div class="container">
      <?php
      if(isset($_SESSION['Logged'])){
        if($_SESSION['rol'] == "1"){
          $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
          switch($url)
            {
              case 'home'     :SitioController::home();
                                break;
              case 'Productos': SitioController::Productos();
                                break;
              case 'CRUD'     :SitioController::CRUD();
                                break;  
              case 'config'   : SitioController::config_avatar();
                                break;                  
                                
              case 'nosotros' : SitioController::nosotros();
                                break;
  
              case 'contacto': SitioController::contacto();
                                break; 
  
              case 'catalogo': SitioController::catalogo();
                               break;    
  
              case 'Logout'  :  SitioController::Logout();
                              header("Refresh:0; url=index.php");
                              break;                
  
              case 'Login'    : SitioController::Login();
                              break;                
              default         : SitioController::home();
                              break;
            }
        }else{
          $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
          switch($url)
            {
              case 'home'     : SitioController::home();
                                break;             
              case 'nosotros'    : SitioController::nosotros();
                              break;
  
              case 'contacto': SitioController::contacto();
                              break; 
  
              case 'catalogo'   : SitioController::catalogo();
                              break;    
  
              case 'Logout'  :  SitioController::Logout();
                              header("Refresh:0; url=index.php");
                              break;                
  
              case 'Login'    : SitioController::Login();
                              break;                
              default         : SitioController::home();
                              break;
            }
        }
      }else{
        SitioController::Login();
      }
      
        
    ?>    
  </div>

<footer>
      <p class="text-center" style="margin-top: 50px;">
        Sitio creado por: Sergio F. y Victor V. &copy; <?php echo date('Y'); ?>
      </p>
</footer>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tabla-dinamica.js"></script>
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>

