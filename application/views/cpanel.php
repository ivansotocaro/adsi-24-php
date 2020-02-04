<p>
	Hola
	<?php 
		echo $nombre;
	?>
</p>

<button type="button" class="btn btn-primary" onclick="cerrar()">Cerrar Session</button>
<button type="button" class="btn btn-primary" onclick="taprendiz()">Ver Tabla</button>

<div id="taprendiz" >
	
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/controlador/login.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/controlador/persona.js'); ?>"></script>

