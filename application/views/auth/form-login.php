<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AurumMisa / Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/dist/css/AdminLTE.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="<?=base_url()?>public/css/estilos.css">
</head>
<body class="hold-transition login-page">
  <div class="container-fluid">
    <div> <div class="caja bg-azul-personal" ></div> </div>
    <div> <div class="caja bg-verde-personal"></div> </div>
    <div> <div class="caja bg-oro-personal"></div> </div>
    <div> <div class="caja bg-fuccia-personal"></div> </div>
    <div> <div class="caja bg-gris-personal"></div> </div>
    <div> <div class="caja bg-verdeClaro-personal"></div> </div>
    <div> <div class="caja bg-naranja-personal"></div> </div>
  </div>
  <div class="login-box contenedor-formulario">
    <div class="wrap">
      <div class="login-logo">
          <img src="<?=base_url()?>public/imagenes/icono_aurum.png" width="100px">
      </div>
      <p class="text-center bg_texto"><?php echo lang('login_subheading');?></p>

      <div id="bg_texto"><?php echo $message;?></div>

      <?php
        $attr = array('class' => 'formulario', 'id' => 'formulario_registro');
        echo form_open("auth/login", $attr);
      ?>
      <div>
        <div class="input-group">
          <?php
            $attrLabel = array("class" => "label");
            echo form_input($identity);
            echo lang('login_identity_label', 'identity', $attrLabel);
          ?>
        </div>

        <div class="input-group">
          <?php
            echo form_input($password);
            echo lang('login_password_label', 'password', $attrLabel);
          ?>
        </div>

        <div class="input-group checkbox">
          <?php
            $attrRadio = array();
            echo form_checkbox('remember', '1', FALSE, 'id="remember"');
            echo lang('login_remember_label', 'remember', $attrLabel);
          ?>
        </div>


        <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

      <?php echo form_close();?>

        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>


      </div>
  </div>
</div>
<script type="text/javascript" src="<?=base_url()?>public/bower_components/jquery/dist/jquery.js"></script>
 <!--Mi SCRIPT  -->
<script src="<?=base_url()?>public/js/javascript.js"></script>
</body>
</html>