function ingresar() {
    // body...
    var user = 0; 
    var pass = ""; 
    var ruta = "";
    user = $("#Usuario").val();   
    pass = $("#Pass").val();
    ruta = url + clogin + 'ingresar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'user': user,
                    'pass': pass 
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
            location.href= url + clogin + "cpanel";           
            //alertify.success("Dato Encontrado");
        }else{
            alertify.error("Error al Buscar Dato");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}

function cerrar() {
    // body...

    
    ruta = url + clogin + "cerrar";
    
    $.ajax({
        'url'  : ruta,        
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
            location.href= url + cmain + "pagina2";           
            //alertify.success("Dato Encontrado");
        }else{
            alertify.error("Error al Buscar Dato");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}