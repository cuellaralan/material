<?php 
session_start();

	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	require_once("clases/AccesoDatosProductos.php");
	require_once("clases/productos.php");

?>
<table class="table"  style=" background-color: beige">
	<thead>
		<tr>
			<th></th><th>Nombre</th><th>Imagen</th>
		</tr>
	</thead>
	<tbody>

		<?php 

		echo"<tr>
				<td><a onclick='BorrarUsuario('admin')' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
				<td>comp</td>
				<td><img src='imagenes/admin.jpg'width='100px' height='100px'/></td>
			</tr>
			<tr>
				<td><a onclick='BorrarUsuario('user')' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
				<td>vend</td>
				<td><img src='imagenes/user2.jpg'width='100px' height='100px'/></td>
			</tr>";

		 ?>
	</tbody>
</table>