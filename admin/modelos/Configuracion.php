<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Configuracion{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($nombre,$ruc,$direccion,$telefono,$precio){
		date_default_timezone_set('America/Asuncion');
//	$fechacreada=date('Y-m-d H:i:s');
	$sql="INSERT INTO configuracion (nombre,ruc,direccion,telefono,precio) VALUES ('$nombre','$ruc','$direccion','$telefono','$precio')";
	return ejecutarConsulta($sql);
}

public function editar($idconfiguracion,$nombre,$ruc,$direccion,$telefono,$precio){
		date_default_timezone_set('America/Asuncion');
	$sql="UPDATE configuracion SET nombre='$nombre',ruc='$ruc',direccion='$direccion',telefono='$telefono', precio='$precio'
	WHERE idconfiguracion='$idconfiguracion'";
	return ejecutarConsulta($sql);
}



//metodo para mostrar registros
public function mostrar($idconfiguracion){
	$sql="SELECT * FROM configuracion WHERE idconfiguracion='$idconfiguracion'";
	return ejecutarConsultaSimpleFila($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM configuracion";
	return ejecutarConsulta($sql);
}
//listar y mostrar en selct
public function select(){
	$sql="SELECT * FROM configuracion";
	return ejecutarConsulta($sql);
}




}

 ?>
