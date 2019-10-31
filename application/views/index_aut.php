<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Material Design fonts -->
<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

  <link rel="stylesheet" href="assets/css/estilos_aut.css">
</head>
<body>
     <div class="container-fluid" style="float: none; width: 100%; margin: 0;padding: 0">
        <div style="width: 14.285%"><div class="box box-danger"></div></div>
        <div style="width: 14.285%"><div class="box box-primary"></div></div>
        <div style="width: 14.285%"><div class="box box-warning"></div></div>
        <div style="width: 14.285%"><div class="box box-success"></div></div>
        <div style="width: 14.285%"><div class="box box-info"></div></div>
        <div style="width: 14.285%"><div class="box box-default"></div></div>
        <div style="width: 14.285%"><div class="box box-danger"></div></div>
      </div>

  <div class="login-box">
    <div class="login-logo">
        <img src="assets/imagenes/icono_aurum.png" class="logo-mini" width="100px">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

      <form action="<?='user_autentication/login' ?>" method="post" name="form-login" id="form-login">
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <input name="identity" id="identity" type="email" class="form-control input-sm" placeholder="Email">
        </div>
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <input name="password" id="password" type="password" class="form-control input-sm" placeholder="Password">
        </div>
        <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck text-sm">
                <label>
                  <input type="checkbox" name="remember" id="remember"> Recordarme
                </label>
              </div>
            </div>
          <!-- /.col -->
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
          <!-- /.col -->
      </form>

      <p class="text-sm lead"><a href="#">Has olvidado tu Contraseña?</a><br></p>

    </div>
<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      /*increaseArea: '10%',  optional */
    });
  });
</script>
</body>
</html>
