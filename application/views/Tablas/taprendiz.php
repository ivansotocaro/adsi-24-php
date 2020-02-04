<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Identificación</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
       <th scope="col" colspan="2" align="center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(!empty($aprendiz)){
        foreach ($aprendiz->result() as $data ) {      
    ?>
        <tr>
          <th scope="row">
            <?php
              echo $data->Identificacion;
            ?>
          </th>
          <td>
             <?php
              echo $data->Nombre;
            ?>
          </td>
          <td>
             <?php
              echo $data->Apellidos;
            ?>
          </td>
          <td>
              <button type="button" onclick="cargardatamodal('<?php echo  $data->Identificacion; ?>','<?php echo  $data->Nombre; ?>','<?php echo  $data->Apellidos; ?>')" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Actualizar
</button>
          </td>
          
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Titulo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
           <input type="text" id="Identificacion" class="form-control">
        </div>
        <div class="input-group mb-3">  
           <input type="text" id="Nombre" class="form-control">
        </div>
        <div class="input-group mb-3">
          <input type="text" id="Apellidos" class="form-control">
         </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizardatomodal()">Save changes</button>
        <button type="button" class="btn btn-danger" onclick="Eliminardatomodal()">Eliminar changes</button>
      </div>
    </div>
  </div>
</div>