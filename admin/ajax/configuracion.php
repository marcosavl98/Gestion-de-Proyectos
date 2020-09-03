<?php 
require_once "../modelos/Configuracion.php";
if (strlen(session_id())<1) 
	session_start();

$configuracion=new Configuracion();

$idconfiguracion=isset($_POST["idconfiguracion"])? limpiarCadena($_POST["idconfiguracion"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$ruc=isset($_POST["ruc"])? limpiarCadena($_POST["ruc"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$precio=isset($_POST["precio"])? limpiarCadena($_POST["precio"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
	if (empty($idconfiguracion)) {
		$rspta=$configuracion->insertar($nombre,$ruc,$direccion,$telefono,$precio);
		echo $rspta ? "Datos registrados correctamente" : "No se pudieron registrar los datos";
	}else{
         $rspta=$configuracion->editar($idconfiguracion,$nombre,$ruc,$direccion,$telefono,$precio);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudieron actualizar los datos";
	}
		break;




	case 'mostrar':
		$rspta=$configuracion->mostrar($idconfiguracion);
		echo json_encode($rspta);
		break;

  

case 'listar':
		$rspta=$configuracion->listar();
		//declaramos un array
		$data=Array();


		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
			"0"=>'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idconfiguracion.')"><i class="fa fa-pencil"></i></button>',

            "1"=>$reg->nombre,
            "2"=>$reg->ruc,
            "3"=>$reg->direccion,
            "4"=>$reg->telefono,
            "5"=>$reg->precio
            

              );
		}
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);   
		break;

			case 'selectConfiguracion':
			$rspta=$configuracion->select();
			echo '<option value="0">seleccione...</option>';
			while ($reg=$rspta->fetch_object()) {
				echo '<option value=' . $reg->idconfiguracion.'>'.$reg->nombre.'</option>';
			}
			break;
}
 ?>