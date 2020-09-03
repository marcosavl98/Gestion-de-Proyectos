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
        url: "../ajax/asistencia.php?op=registrar_entrada",
        type: "POST",
        data: "codigo_persona=" + parametros,
      

        success: function(datos){
                $("#movimientos").html(datos);
              // setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });

limpiar();

});



$("#btn_salida").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/asistencia.php?op=registrar_salida",
        type: "POST",
        data: "codigo_persona=" + parametros,
      

        success: function(datos){
                $("#movimientos").html(datos);
              // setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });

limpiar();

});


$("#btn_iniciob").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/asistencia.php?op=registrar_iniciob",
        type: "POST",
        data: "codigo_persona=" + parametros,
        //contentType: false,
        //processData: false,

        success: function(datos){
                $("#movimientos").html(datos);
              //  setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });

limpiar();
});

$("#btn_finalb").on("click",function(e){
     e.preventDefault();//no se activara la accion predeterminada 
    // alert('entro');
    var parametros = $("#codigo_persona").val();
    //alert(parametros);
    $.ajax({
        url: "../ajax/asistencia.php?op=registrar_finalb",
        type: "POST",
        data: "codigo_persona=" + parametros,
        //contentType: false,
        //processData: false,

        success: function(datos){
                $("#movimientos").html(datos);
               // setTimeout('document.location.reload()',2000);
            //bootbox.alert(datos);
        }
     });

limpiar();
});


