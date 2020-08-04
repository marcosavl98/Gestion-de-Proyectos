<?php 
require_once "../modelos/Descanso.php";

$descanso=new Descanso();

$codigo_persona=isset($_POST["codigo_persona"])? limpiarCadena($_POST["codigo_persona"]):"";
$iddepartamento=isset($_POST["iddepartamento"])? limpiarCadena($_POST["iddepartamento"]):"";



switch ($_GET["op"]) {
	case 'registrar_descanso':
		$resultado=$descanso->verificarcodigo_persona($codigo_persona);

      	if($resultado > 0) {
	date_default_timezone_set('America/Asuncion');
      		$fecha = date("Y-m-d");
			$hora = date("H:i:s");

			$resultado2=$descanso->seleccionarcodigo_persona($codigo_persona);
     		$count2 = mysqli_num_rows($resultado2);
			   
     		$par = abs($count2%2); 

          if ($par == 1){ 
                              
                $tipo = "Inicio Break";
        		$respuesta=$descanso->registrar_iniciob($codigo_persona,$tipo);
    			//$movimiento = 0;
    			echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-success"> Inicio del Break registrado '.$hora.'</div>' : 'No se pudo registrar el ingreso';
   		  }else{ 
                $tipo = "Final Break";
         		$respuesta=$descanso->registrar_finalb($codigo_persona,$tipo);
     			//$movimiento = 1;
     			echo $respuesta ? '<h3><strong>Nombres: </strong> '. $resultado['nombre'].' '.$resultado['apellidos'].'</h3><div class="alert alert-danger"> Final del Break registrado '.$hora.'</div>' : 'No se pudo registrar la salida';             
        } 
        } else {
		         echo '<div class="alert alert-danger">
                       <i class="icon fa fa-warning"></i> No hay empleado registrado con ese Nro. de Cedula!
                         </div>';
        }


  break;

}
?>