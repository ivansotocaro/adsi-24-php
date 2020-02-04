
<br>

<div class="input-group mb-3">
	<input type="text" class="form-control" id="Identificacion" placeholder="Ingrese su Identificacion">
</div>
<div class="input-group mb-3">
	<input type="text" class="form-control" id="Nombre" placeholder="Ingrese su Nombre">
</div>
<div class="input-group mb-3">
	<input type="text" class="form-control" id="Apellidos" placeholder="Ingrese su Apellidos">
</div>
<div class="input-group mb-3">
	<input type="text" class="form-control" id="Celular" placeholder="Ingrese su Celular">
</div>

<button onclick="enviar()" class="btn btn-primary" >Guardar</button>
<button onclick="buscarespecifico()" class="btn btn-info" >Buscar</button>
<button onclick="actualizar()" class="btn btn-success" >actualizar</button>
<button onclick="eliminar()" class="btn btn-danger" >eliminar</button>


<script type="text/javascript" src="<?php echo base_url('assets/js/controlador/persona.js'); ?>"></script>
