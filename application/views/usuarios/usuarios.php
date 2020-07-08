<a href="<?php echo base_url()?>index.php/usuarios/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Usuario</a>
<?php
if(!$results){?>
        <div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
        </span>
        <h5>Usuarios</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nombre</th>
            <th>DNI</th>
           <!-- <th>NIF</th>-->
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Nivel</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>    
        <tr>
            <td colspan="5">Ningún Usuario Encontrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>


<?php } else{?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5>Usuarios</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nombre</th>
            <th>DNI</th>
           <!-- <th>NIF</th>-->
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Nivel</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
           
            echo '<tr>';
            echo '<td>'.$r->idUsuarios.'</td>';
            echo '<td>'.$r->nombre.'</td>';
          /*  echo '<td>'.$r->rg.'</td>';*/
            echo '<td>'.$r->rg.'</td>';
            echo '<td>'.$r->telefono.'</td>';
            echo '<td>'.$r->situacion.'</td>';
            echo '<td>'.$r->permissao.'</td>';
            echo '<td>
                      <a href="'.base_url().'index.php/usuarios/editar/'.$r->idUsuarios.'" class="btn btn-info tip-top" title="Editar Usuario"><i class="icon-pencil icon-white"></i></a>
                  </td>';
            echo '</tr>';
        }?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
<!--<h5>NOTA: No eliminar ni modificar el usuario 1 (POR ASIGNAR) </h5>-->
<h5>Estado 1 = Activo </h5>
<h5>Estado 0 = Inactivo </h5>

	
<?php echo $this->pagination->create_links();}?>
