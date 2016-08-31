<?php 
session_start();// primer linea debe ser esta sino no funcion las sessiones
	//hay que hacer otro isset pero $_session de user y harkodear la tabla sin los botones
		
	
	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	require_once("clases/AccesoDatosProductos.php");
	require_once("clases/productos.php");
		

	$arrayDeCds=productos::TraerTodoLosCds();
if (isset($_SESSION['admin']) || isset($_SESSION['vend']) ) { 
 ?>
<table class="table"  style=" background-color: beige">
	<thead>
		<tr>
			<th>Borrar</th><th>ID</th><th>Nombre</th>
		</tr>
	</thead>
	<tbody>

		<?php 

	foreach ($arrayDeCds as $cd) {
		echo"<tr>
				<td><a onclick='BorrarCD($cd->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
				<td>$cd->id</td>
				<td>$cd->nombre</td>
			</tr>   
			";
	}		

		 ?>
	</tbody>
	<a onclick="Mostrar('MostrarFormAlta')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Alta Producto</a>
</table>

<?php 
 
}
elseif (isset($_SESSION['comp'])) {
?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th></th><th></th><th>ID</th><th>Nombre</th>
		</tr>
	</thead>
	<tbody>

		<?php 

	foreach ($arrayDeCds as $cd) {
		echo"<tr>
				<td></td>
				<td></td>
				<td>$cd->id</td>
				<td>$cd->nombre</td>				
			</tr>   
			";
	}		
						 ?>
	</tbody>
</table>

<?php 
 }

else{
	echo "<h1>No esta logueado</h1>";
}
	 ?>