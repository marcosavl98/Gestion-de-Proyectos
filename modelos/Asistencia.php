<?php 
//incluir la conexion de base de datos
require "../admin/config/Conexion.php";


class Asistencia{


	//implementamos nuestro constructor
public function __construct(){

}

public function verificar_marcacion($codigo_persona){
 	$sql = "SELECT * FROM usuarios WHERE codigo_persona='$codigo_persona'";
	return ejecutarConsultaSimpleFila($sql);
}




public function verificarcodigo_persona($codigo_persona){
 	$sql = "SELECT * FROM usuarios WHERE codigo_persona='$codigo_persona'";
	return ejecutarConsultaSimpleFila($sql);
}

public function seleccionarcodigo_persona($codigo_persona){
    $sql = "SELECT * FROM asistencia WHERE codigo_persona = '$codigo_persona'";
	return ejecutarConsulta($sql);
}


public function verificar_entrada($codigo_persona,$fecha){
$sql = "SELECT * FROM asistencia WHERE codigo_persona = '$codigo_persona' AND fecha = '$fecha'";
return ejecutarConsulta($sql);

}



public function registrar_entrada($codigo_persona){
$fecha_hora = date("Y-m-d H:i:s");
$fecha = date("Y-m-d");

    $sql = "INSERT INTO asistencia (codigo_persona,  entrada,fecha) VALUES ('$codigo_persona', '$fecha_hora','$fecha')";
	return ejecutarConsulta($sql);
}

public function registrar_salida($codigo_persona){
	$fecha_hora = date("Y-m-d H:i:s");
   $sql = "UPDATE asistencia SET salida= '$fecha_hora'  WHERE codigo_persona= $codigo_persona";
return ejecutarConsulta($sql);
}


public function registrar_iniciob($codigo_persona){
	$fecha_hora = date("Y-m-d H:i:s");
 	$fecha = date("Y-m-d");
 	 $sql = "UPDATE asistencia SET iniciob= '$fecha_hora'  WHERE codigo_persona= $codigo_persona AND fecha= '$fecha'";
   
    return ejecutarConsulta($sql);

}

public function registrar_finalb($codigo_persona){
	$fecha_hora = date("Y-m-d H:i:s");
 	
 		 $sql = "UPDATE asistencia SET finalb = '$fecha_hora' WHERE codigo_persona= $codigo_persona";

return ejecutarConsulta($sql);
}



//listar registros
public function listar(){
	$sql="SELECT * FROM asistencia";
	return ejecutarConsulta($sql);
}


}

 ?>
