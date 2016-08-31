<?php 
session_start();

	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	require_once("clases/AccesoDatosProductos.php");
	require_once("clases/productos.php");
		

	$arrayDeCds=productos::TraerTodoLosCds();
if (isset($_SESSION['comp'])) { 
 ?>

	<figure class="post-image">
				<h2>Mi Perfil<h2>

				<br><img src="imagenes/admin.jpg" /></br>
				<br>Nombre: <?php echo $_SESSION['comp']?></br>

				<br>Privilegio: comprador</br>

			</figure>


<?php 
 
}
else if (isset($_SESSION['vend'])) {
?>
	<figure class="post-image">
				<h2>Mi Perfil<h2>

				<br><img src="imagenes/user2.jpg" /></br>

				<br>Nombre: <?php echo $_SESSION['vend']?></br>
				<br>Privilegio: vendedor</br>


			</figure>
<?php 


 }

else{
	echo "<h1>Usuario Admin</h1>";
}
	 ?>