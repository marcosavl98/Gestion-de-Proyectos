var tabla;

//funcion que se ejecuta al inicio
//function init(){
//$("#formulario").on("submit",function(e){
  // 	registrar_descanso(e);
   //})


//}

//funcion limpiar
function limpiar(){
	$("#codigo_persona").val("");
	setTimeout('document.location.reload()',2000);

}

$("#btn_entrada").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/asistencia.php?op=registrar_asistencia",
        type: "POST",
        data: "codigo_persona=" + parametros,
        //contentType: false,
        //processData: false,

        success: function(datos){
                $("#movimientos").html(datos);
                setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });


});

$("#btn_iniciob").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/descanso.php?op=registrar_descanso",
        type: "POST",
        data: "codigo_persona=" + parametros,
        //contentType: false,
        //processData: false,

        success: function(datos){
                $("#movimientos").html(datos);
                setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });


});

$("#btn_finalb").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/descanso.php?op=registrar_finalb",
        type: "POST",
        data: "codigo_persona=" + parametros,
        //contentType: false,
        //processData: false,

        success: function(datos){
                $("#movimientos").html(datos);
                setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });


});





function registrar_descanso(e){
     e.preventDefault();//no se activara la accion predeterminada 
     $("#btnGuardar").prop("disabled",true);
     var parametros = $("#codigo_persona").val();

     //var formData=new FormData($("#formulario")[0]);
//alert(parametros);

     $.ajax({
     	url: "../ajax/descanso.php?op=registrar_descanso",
     	type: "POST",
     	data: "codigo_persona=" + parametros,
     	//contentType: false,
     	//processData: false,

     	success: function(datos){
     		console.log(datos);
            	$("#movimientos").html(datos);
     		//bootbox.alert(datos);
     	}
     });
//     limpiar();
}





//init();