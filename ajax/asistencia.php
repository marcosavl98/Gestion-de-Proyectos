<?php 
require_once "../modelos/Asistencia.php";
require_once "../modelos/Descanso.php";
$asistencia=new Asistencia();
$descanso=new Descanso();

$codigo_persona=$_POST["codigo_persona"];


switch ($_GET["op"]) {

	case 'registrar_entrada':
   
     $resultado=$asistencia->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

        $fecha = date("Y-m-d");

         $verificarentrada=$asistencia->verificar_entrada($codigo_persona,$fecha);
     //var_dump($verificarentrada);
         $count = mysqli_num_rows($verificarentrada);

         if ($count > 0 ){

         echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> Ya registraste tu entrada hoy !!
                          </div>';
         }else{

          $respuesta=$asistencia->registrar_entrada($codigo_persona);

          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-success"> Entrada Registrada </div>' : 'No se pudo registrar el ingreso';
         }
         
     

        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;


case 'registrar_salida':
   
     $resultado=$asistencia->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

     
          $respuesta=$asistencia->registrar_salida($codigo_persona);
                    
//     echo $respuesta;

          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-danger"> Salida Registrada </div>' : 'No se pudo registrar la salida';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;


case 'registrar_iniciob':
   
     $resultado=$asistencia->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

          $fecha_hora = date("Y-m-d H:i:s");
     
          $respuesta=$asistencia->registrar_iniciob($codigo_persona);
                    
        //  echo "line33". $respuesta;
          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-success"> Inicio del Break registrado </div>' : 'No se pudo registrar el Inicio del Break';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;

case 'registrar_finalb':
   
     $resultado=$asistencia->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {
     
          $respuesta=$asistencia->registrar_finalb($codigo_persona);
                    
        //  echo "line33". $respuesta;
          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-danger"> Final del Break registrado </div>' : 'No se pudo registrar el Final del Break';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;



}
?>