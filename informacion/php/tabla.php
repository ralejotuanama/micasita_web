<?php

include "conexion.php";




$user_id=null;
$sql1= "SELECT id, dni, nombre, telefono, correo, amabilidad, atencion, capacidad, respuestas, calidad,tiempo, recomendacion FROM wp_encuesta";


$query = $con->query($sql1);


?>

<?php if($query->num_rows>0):?>


<table class="table" style="width:100%">
<thead>
<tr>
	<th style="width:15px">codigo</th>
        <th>dni</th>
        <th>nombre</th>
        <th>tel&eacutefono</th>
        <th>correo</th>
        <th>amabilidad</th>
        <th>atenci&oacuten</th>
        <th>capacidad</th>
        <th>respuestas</th>
        <th>calidad</th>
 <th>tiempo</th>

      <!--  <th style="width:25px">recomendacion</th>-->
</tr>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td style="width:15px"><?php echo $r["id"] ?></td>
        <td><?php echo $r["dni"] ?> </td>
        <td><?php echo $r["nombre"] ?> </td>
        <td><?php echo $r["telefono"] ?> </td>
        <td><?php echo $r["correo"] ?> </td>
        <td><?php echo $r["amabilidad"] ?> </td>
        <td><?php echo $r["atencion"] ?> </td>
        <td><?php echo $r["capacidad"] ?> </td>
        <td><?php echo $r["respuestas"] ?> </td>
        <td><?php echo $r["calidad"] ?> </td>
<td><?php echo $r["tiempo"] ?> </td>

      <!--  <td style="width:25px"><?php echo $r["recomendacion"] ?> </td>-->

		
	<!--<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["post_id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["post_id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["post_id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>-->
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>


