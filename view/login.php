<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="dist/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="dist/bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="dist/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="dist/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 </head>
 <style>

</style>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <center><h2 style="margin-top: 5px">Iniciar sesion</h2></center><br>

      <form role="form" action="?c=Login&a=Acceder" class="form-horizontal" method="POST">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" placeholder="Usuario" name="usuario" id="inputEmail3" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" placeholder="Password" name="password" id="inputPassword3" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class=" col-sm-12">
            <!--button type="submit" class="btn btn-success" style="width: 100%;">Acceder</button-->
            <a type="button" href="?c=inicio" class="btn btn-primary" style="width: 100%;">Acceder</a>

          </div>
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    });
  </script>
</body>
</body>
</html>
