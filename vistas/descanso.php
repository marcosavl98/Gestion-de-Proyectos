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
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Reloj </b> Marcador</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tu codigo de empleado y seleccione la opcion</p>

    <form method="post">
    
  <div class="form-group">
  <label class="col-md-4 control-label" for="codigo_persona">Codigo </label>  
  <div class="col-md-4">
 
  </div>
</div>


      <div class="form-group has-feedback">
        <input id="codigo_persona" name="codigo_persona" type="text" placeholder="Codigo de empleado" class="form-control input-md" required="">
  <span class="help-block">Ingrese su codigo sin puntos </span>  
      </div>
   
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-8">
           <button id="btn_entrada" name="btn_entrada" class="btn btn-success">Entrada</button>
           <button id="btn_salida" name="btn_salida" class="btn btn-danger">Salida</button>
           
        </div>

         <div class="col-md-8">

    <button id="btn_iniciob" name="btn_iniciob" class="btn btn-success">Inicio Break</button>
    <button id="btn_finalb" name="btn_finalb" class="btn btn-danger">Final Break</button>
  </div>
        <!-- /.col -->
      </div>
    </form>

   
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->





    <div name="movimientos" id="movimientos">
    </div> 




   <form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Text input-->


<!-- Button (Double) -->

 
  </div>
</div>

<!-- Button (Double) -->

</fieldset>
</form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <!-- <div class="help-block text-center">
    Ingresa tu Clave de asistencia
  </div> -->
  <div class="text-center">
<div class="col-xs-4">



<a href="http://localhost/Gestion-de-Proyectos/vistas/asistencia.php" class="btn btn-primary btn-danger pull-right"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>
            </div><!-- /.col -->
  </div>
    
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
