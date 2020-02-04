var intento = 0;
function enviar() {
	// body...
	var identifiacion = 0;
	var nombre = "";
	var apellidos = "";
    var celular = 0;
    var ruta = "";

    identificacion = $("#Identificacion").val();
	nombre = $("#Nombre").val();
    apellidos = $("#Apellidos").val();
    celular = $("#Celular").val();		
	
    ruta = url + cperson + 'saveperson';
	
	$.ajax({
        'url'  : ruta,
        'data' : {
        			'identificacion': identificacion ,
        	 		'nombre': nombre,
                    'apellidos': apellidos ,
                    'celular': celular

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            alertify.success("Datos Guardado");
        }else{
            alertify.error("Error al Guardar");
        }
            
	}).fail(function() {
	    alertify.error( "error" );
	})
}

function limpiar(){
    $("#Identificacion").val("");
    $("#Nombre").val("");
    $("#Apellidos").val("");
    $("#Celular").val("");  
}

function buscarespecifico() {
    // body...
    var identifiacion = 0;  
    var ruta = "";
    identificacion = $("#Identificacion").val();   
    ruta = url + cperson + 'buscarespecifico';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion 
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 
        var respuesta = "";
        var obj = "";
        respuesta = '{"respuestas": ['+data+']}'; 
        obj = JSON.parse(respuesta);
        if(obj.respuestas[0]!= false){
            $("#Nombre").val(obj.respuestas[0].Nombre);
            $("#Apellidos").val(obj.respuestas[0].Apellidos);
            $("#Celular").val(obj.respuestas[0].Celular);            
            alertify.success("Dato Encontrado");
        }else{
            alertify.error("Error al Buscar Dato");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}

function actualizar() {
    // body...
    var identifiacion = 0;
    var nombre = "";
    var apellidos = "";
    var celular = 0;
    var ruta = "";

    identificacion = $("#Identificacion").val();
    nombre = $("#Nombre").val();
    apellidos = $("#Apellidos").val();
    celular = $("#Celular").val();      
  
    
    
    ruta = url + cperson + 'actualizar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion ,
                    'nombre': nombre,
                    'apellidos': apellidos ,
                    'celular': celular

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            alertify.success("Datos Actualizado Con exitos");
        }else{
            alertify.error("Error al Actualizar los datos");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
}

function eliminar() {
    // body...
    var identifiacion = 0;
    
    identificacion = $("#Identificacion").val();
        
    ruta = url + cperson + 'eliminar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            alertify.success("Datos Eliminado Con exitos");
        }else{
            alertify.error("Error al Eliminar el dato");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
}

function taprendiz(){
    var ruta = "";
    var id_html = "";
    ruta=url+cperson+"taprendiz";
    id_html = "taprendiz";
    cargar_tabla(ruta,id_html);
}

function cargar_tabla(ruta, id_html){
    $.ajax({
        'url'  : ruta,
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

        $("#"+id_html).html(data);            
    }).fail(function() {
        alertify.error( "error" );
    })
}

function cargardatamodal(id, nombre, apellidos) {
    // body...
    $("#Identificacion").val(id);
    $("#Nombre").val(nombre);
    $("#Apellidos").val(apellidos);
}

function actualizardatomodal() {
    // body...
    actualizar();   
    CierraPopup("exampleModal");
}

function CierraPopup(id_modal) {
  taprendiz();
  intento++;
  if(intento>2){
     taprendiz();
  }
  $("#"+id_modal).modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

function Eliminardatomodal() {
    // body...
    eliminar(); 
    taprendiz();
    CierraPopup("exampleModal");
}


