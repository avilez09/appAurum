<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AURUS ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style-->
  <link rel="stylesheet" href="<?=base_url()?>public/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <link rel="stylesheet" href="<?=base_url()?>public/css/estilos.css">
</head>
<body>
  <div class="container-fluid">
    <div> <div class="caja bg-azul-personal" ></div> </div>
    <div> <div class="caja bg-verde-personal"></div> </div>
    <div> <div class="caja bg-oro-personal"></div> </div>
    <div> <div class="caja bg-fuccia-personal"></div> </div>
    <div> <div class="caja bg-gris-personal"></div> </div>
    <div> <div class="caja bg-verdeClaro-personal"></div> </div>
    <div> <div class="caja bg-naranja-personal"></div> </div>
  </div>
  <div id="wrapper" class="wrapper">
    <section class="content-menu">
      <header id="header">
        <a href="javascript:void(0);" id="menu_on">
          <span></span> <span></span> <span></span>
        </a>
      </header>
      <nav>
        <ul>
          <li>
            <a href="<?=base_url()?>Cpanel/">Inicio</a>
          </li>
          <li>
            <a href="<?=base_url()?>Cpanel/">Historico</a>
          </li>
          <li>
            <a href="<?=base_url()?>Cpanel/">Configuracion</a>
          </li>
          <li>
            <a href="<?=base_url()?>Cpanel/">Configuracion Empresa</a>
          </li>
        </ul>
      </nav>
    </section>
  <div id="content"> <?php echo $contenido; ?> </div>


    <footer class="main-footer">
      <strong>Copyright &copy; 2019.</strong> All rights reserved.
      <div class="pull-right-container">
        <b>Version</b> 1.0
      </div>
    </footer>
</div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?=base_url()?>public/bower_components/jquery/dist/jquery.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=base_url()?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
   <!--Mi SCRIPT  -->
  <script src="<?=base_url()?>public/js/javascript.js"></script>
</body>
</html>