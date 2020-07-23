<?php 
require_once "../modelos/Departamento.php";
if (strlen(session_id())<1) 
	session_start();

$departamento=new Departamento();

$iddepartamento=isset($_POST["iddepartamento"])? limpiarCadena($_POST["iddepartamento"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$idusuario=$_SESSION["idusuario"];

switch ($_GET["op"]) {
	case 'guardaryeditar':
	if (empty($iddepartamento)) {
		$rspta=$departamento->insertar($nombre,$descripcion,$idusuario);
		echo $rspta ? "Datos registrados correctamente" : "No se pudieron registrar los datos";
	}else{
         $rspta=$departamento->editar($iddepartamento,$nombre,$descripcion,$idusuario);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudieron actualizar los datos";
	}
		break;
	

	case 'desactivar':
		$rspta=$departamento->desactivar($iddepartamento);
		echo $rspta ? "Datos desactivados correctamente" : "No se pudieron desactivar los datos";
		break;
	case 'activar':
		$rspta=$departamento->activar($iddepartamento);
		echo $rspta ? "Datos activados correctamente" : "No se pudieron activar los datos";
		break;
	
	case 'mostrar':
		$rspta=$departamento->mostrar($iddepartamento);
		echo json_encode($rspta);
		break;

  /**case 'listar':
		$rspta=$departamento->listar();
		//declaramos un array
		$data=Array();

		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
            "0"=>($reg->estado)?'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->iddepartamento.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->iddepartamento.')"><i class="fa fa-close"></i></button>'.' '.'<button class="btn btn-primary btn-xs" onclick="activar('.$reg->iddepartamento.')"><i class="fa fa-check"></i></button>';
*/



case 'listar':
		$rspta=$departamento->listar();
		//declaramos un array
		$data=Array();


		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
				"0"=>($reg->estado)?'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->iddepartamento.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->iddepartamento.')"><i class="fa fa-close"></i></button>':'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->iddepartamento.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-primary btn-xs" onclick="activar('.$reg->iddepartamento.')"><i class="fa fa-check"></i></button>',


            "1"=>$reg->nombre,
            "2"=>$reg->descripcion,
            "3"=>$reg->fechacreada,
            "4"=>($reg->estado)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'

              );
		}
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);   
		break;

		case 'selectDepartamento':
			$rspta=$departamento->select();
			echo '<option value="0">seleccione...</option>';
			while ($reg=$rspta->fetch_object()) {
				echo '<option value=' . $reg->iddepartamento.'>'.$reg->nombre.'</option>';
			}
			break;
}
 ?>