function operacion() {
	// body...
	var numero1 = 0;	
	var numero2 = 0;
	numero1 = $("#numero1").val();
	numero2 = $("#numero2").val();
	
	$.ajax({
        'url'  : 'operacion.php',
        'data' : {
        			'num1': numero1 ,
        	 		'num2': numero2,
                    'opera': 'otro2'
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              $("#resultado").html("La Ruta de la pagina no es la correcta" );
            }
          },
        beforeSend: function( xhr ) {
         $("#resultado").html( "<img id='img' src='IMG/lead.gif' width='100px' height='100px'>" );
        }
    }).done(function( data ) {
   
          
            var obj = JSON.parse(data);         
            var cont = 0; 
            setTimeout(datos(obj, cont), 2000);
        
            
  }).fail(function() {
    alert( "error" );
  })
  .always(function() {

    $( "#img" ).remove();
     //$("#resultado").html("");
  });

}
function datos(obj, cont){
                $.each(obj, function(i, valor) {             
                    
                        $( "#resultado" ).fadeIn( 10000).append("<p id="+i+"> Titulo = "+obj[i].Titulo+"</p>");

              });
        }

function op () {
            // body...
    var numero1 = 0;    
    var numero2 = 0;
    numero1 = $("#numero1").val();
    numero2 = $("#numero2").val();
    
    $.ajax({
        'url'  : 'operacion.php',
        'data' : {
                    'num1': numero1 ,
                    'num2': numero2,
                    'opera': 'suma'
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              $("#resultado").html("La Ruta de la pagina no es la correcta" );
            }
          },
        beforeSend: function( xhr ) {
         $("#respuestaope").html( "<img id='imgope' src='IMG/lead.gif' width='100px' height='100px'>" );
        }
    }).done(function( data ) {
   
          $( "#respuestaope" ).fadeIn( 10000).append("<br > el resultado de la operación es = "+ data);
            //var obj = JSON.parse(data);    
            //setTimeout(
               // datos(data, '0')
                //, 2000);
        
            
  }).fail(function() {
    alert( "error" );
  })
  .always(function() {

    $( "#imgope" ).remove();
     //$("#resultado").html("");
  });

}