<?php
	$promedio = ($nota1 + $nota2 + $nota3)/3;
	if($promedio>3.5){
		echo "<p>Hola ". $nombre ." Promedio superado</p>";
	}else{
		echo "<p>Hola ". $nombre ." Promedio No superado</p>";
	}
?>

<button type="button" class="btn btn-primary" onclick="hola()">Boton Con Bootstrap</button>
<button type="button" class="btn btn-primary" onclick="iniciar()">Iniciar</button>
<script type="text/javascript" src="<?php echo base_url('assets/js/controlador/app.js'); ?>">
	
</script>