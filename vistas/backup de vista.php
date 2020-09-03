<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control de Asistencia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
   <!-- <link rel="shortcut icon" href="../admin/public/img/reloj.png">-->

  </head>
<body class="hold-transition login-page">



<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="">
              <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> 
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
  </div>






<div class="login-box">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
<?php 
 //include '../ajax/asistencia.php' ?>
    <div name="movimientos" id="movimientos">
    </div> 



   <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
   <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Reloj Marcador</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="codigo_persona">Codigo </label>  
  <div class="col-md-4">
  <input id="codigo_persona" name="codigo_persona" type="text" placeholder="Codigo de empleado" class="form-control input-md" required="">
  <span class="help-block">Ingrese su codigo sin puntos </span>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_entrada">Entrada/Salida</label>
  <div class="col-md-8">
    <button id="btn_entrada" name="btn_entrada" class="btn btn-success">Entrada</button>
    <button id="btn_salida" name="btn_salida" class="btn btn-danger">Salida</button>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_iniciob">Break</label>
  <div class="col-md-8">
    <button id="btn_iniciob" name="btn_iniciob" class="btn btn-success">Inicio Break</button>
    <button id="btn_finalb" name="btn_finalb" class="btn btn-danger">Final Break</button>
  </div>
</div>

</fieldset>
</form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <!-- <div class="help-block text-center">
    Ingresa tu Clave de asistencia
  </div> -->
  <div class="text-center">

  </div>
    <div class="col-xs-4">
             
           <p text align="right"> <a href="http://localhost/Gestion-de-Proyectos/vistas/asistencia.php"> <button type="button" class=" btn btn-danger fa fa-close"> Volver </button> </p>
            </div><!-- /.col -->
</div>
<!-- /.center -->

</div>

    <!-- jQuery -->
    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/asistencia.js"></script>

  </body>
</html> 
