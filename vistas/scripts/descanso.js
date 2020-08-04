var tabla;

//funcion que se ejecuta al inicio
function init(){
$("#formulario").on("submit",function(e){
   	registrar_descanso(e);
   })


}

//funcion limpiar
function limpiar(){
	$("#codigo_persona").val("");
	setTimeout('document.location.reload()',2000);

}

function registrar_descanso(e){
     e.preventDefault();//no se activara la accion predeterminada 
     $("#btnGuardar").prop("disabled",true);
     var formData=new FormData($("#formulario")[0]);

     $.ajax({
     	url: "../ajax/descanso.php?op=registrar_descanso",
     	type: "POST",
     	data: formData,
     	contentType: false,
     	processData: false,

     	success: function(datos){
     			$("#movimientos").html(datos);
     		//bootbox.alert(datos);
     	}
     });
     limpiar();
}





init();