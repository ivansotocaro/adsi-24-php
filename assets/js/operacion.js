function operacion () {
	// body...
	var numero1 = 0;
	var numero2 = 0;
	var ruta = "";

	numero1 = $("#numero1").val();
	numero2 = $("#numero2").val();		
	ruta = url + cmain + 'operaciones';
	
	$.ajax({
        'url'  : ruta,
        'data' : {
        			'num1': numero1 ,
        	 		'num2': numero2
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
            alertify.success(data);
	}).fail(function() {
	    alertify.error( "error" );
	})
  


}