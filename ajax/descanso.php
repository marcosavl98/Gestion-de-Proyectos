<?php 
require_once "../modelos/Descanso.php";

$descanso=new Descanso();

//$codigo_persona=isset($_POST["codigo_persona"])? limpiarCadena($_POST["codigo_persona"]):"";
$codigo_persona=$_POST["codigo_persona"];


switch ($_GET["op"]) {

case 'registrar_entrada':
   
     $resultado=$descanso->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

          $fecha_hora = date("Y-m-d H:i:s");
     
          $respuesta=$descanso->registrar_entrada($codigo_persona,$fecha_hora);
                    
        //  echo "line33". $respuesta;
          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-warning"> Final del Break registrado '.$fecha_hora.'</div>' : 'No se pudo registrar el ingreso';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;



  case 'registrar_descanso':
   
     $resultado=$descanso->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

          $fecha_hora = date("Y-m-d H:i:s");
     
          $respuesta=$descanso->registrar_iniciob($codigo_persona,$fecha_hora);
                    
        //  echo "line33". $respuesta;
          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-success"> Inicio del Break registrado '.$fecha_hora.'</div>' : 'No se pudo registrar el ingreso';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;

 case 'registrar_finalb':
   
     $resultado=$descanso->verificarcodigo_persona($codigo_persona);

       if($resultado > 0) {

          $fecha_hora = date("Y-m-d H:i:s");
     
          $respuesta=$descanso->registrar_finalb($codigo_persona,$fecha_hora);
                    
        //  echo "line33". $respuesta;
          echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-warning"> Final del Break registrado '.$fecha_hora.'</div>' : 'No se pudo registrar el ingreso';
        } else {
           echo '<div class="alert alert-danger">
                     <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                          </div>';
        }


  break;


}
?>