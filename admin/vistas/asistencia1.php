<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Asistencias <small> Listado </small></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->

 


<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
     
      <th>Nombres</th>
      <th>Apellidos</th>
      
      <th>Fecha</th>
      <th>Entrada</th>
      <th>Inicio Break</th>
      <th>Final Break</th>
      <th>Salida</th>
      </thead>
    <tbody>
    </tbody>
  </table>
</div>


      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php 

require 'footer.php';
 ?>
 <script src="scripts/asistencia1.js"></script>
 <?php 
}

ob_end_flush();
  ?>
