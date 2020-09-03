<?php 
//incluir la conexion de base de datos
require "../admin/config/Conexion.php";
class Descanso{


	//implementamos nuestro constructor
public function __construct(){

}



public function verificarcodigo_persona($codigo_persona){
 	$sql = "SELECT * FROM usuarios WHERE codigo_persona='$codigo_persona'";
	return ejecutarConsultaSimpleFila($sql);
}

public function seleccionarcodigo_persona($codigo_persona){
    $sql = "SELECT * FROM asistencia WHERE codigo_persona = '$codigo_persona'";
	return ejecutarConsulta($sql);
}



public function registrar_entrada($codigo_persona,$entrada){
	date_default_timezone_set('America/Asuncion');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
    $sql = "INSERT INTO asistencia (codigo_persona,  entrada, fecha) VALUES ('$codigo_persona', '$entrada', '$fecha')";
	return ejecutarConsulta($sql);
}

public function registrar_salida($codigo_persona,$salida){
	date_default_timezone_set('America/Asuncion');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
    	 $sql = "UPDATE asistencia SET salida= '$hora'  WHERE codigo_persona= $codigo_persona";
   // return $sql;
    return ejecutarConsulta($sql);
}



public function registrar_iniciob($codigo_persona,$iniciob){
	date_default_timezone_set('America/Asuncion');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
 	//$sql = "INSERT INTO asistencia (codigo_persona,  iniciob, fecha) VALUES ('$codigo_persona', '$iniciob', '$fecha')";
 	 $sql = "UPDATE asistencia SET iniciob= '$hora'  WHERE codigo_persona= $codigo_persona";
   // return $sql;
    return ejecutarConsulta($sql);

}

public function registrar_finalb($codigo_persona,$finalb){
	date_default_timezone_set('America/Asuncion');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
 	//$sql = "INSERT INTO asistencia (codigo_persona,  finalb, fecha) VALUES ('$codigo_persona', '$finalb', '$fecha')";
 		 $sql = "UPDATE asistencia SET finalb = '$hora' WHERE codigo_persona= $codigo_persona";
  //      return $sql;
return ejecutarConsulta($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM asistencia";
	return ejecutarConsulta($sql);
}


}

 ?>
