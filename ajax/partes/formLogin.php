<?php
session_start();
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
if (!isset($_SESSION['admin']) && !isset($_SESSION['comp']) && !isset($_SESSION['vend'])){
  # code...

?>
    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="correo" class="sr-only">Correo electrónico</label>
        <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="<?php  if(isset($_COOKIE["registro"])){echo $_COOKIE["registro"];}?>">
        <label for="nombreuser" class="sr-only">Nombre</label>
        <input type="text" id="nombreuser" minlength="4" class="form-control" placeholder="Nombre de usuario" required="">
        <label for="clave" class="sr-only">Clave</label>
        <input type="password" id="clave" minlength="3" class="form-control" placeholder="clave" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="recordarme" checked> Recordame
          </label>
          
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p></p>
      <p></p>
      </form>



    </div> <!-- /container -->
<?php
   }
   else
   {
      if (isset($_SESSION['admin']))
      {
        echo "<h1>Bienvenido Vendedor. En (Productos a la venta) puede agregar o borrar productos.</h1>";
        echo "<button class='btn btn-lg btn-danger btn-block' onclick='deslogear()'>Desloguear</button>";
        echo "<br><td><a onclick='MostrarUsuarios()' class='btn btn-lg btn-success btn-block'> Ver Usuarios</a></td></br>";
      }
      else if (isset($_SESSION['comp']))
      {
        echo "<h1>Bienvenido comprador. En (Productos a la venta) puede ver nuestro listado.</h1>";
        echo "<button class='btn btn-lg btn-danger btn-block' onclick='deslogear()'>Desloguear</button>"; 
      }
      else if (isset($_SESSION['vend']))
      {
         echo "<h1>Bienvenido Vendedor. En (Productos a la venta) puede agregar o borrar productos.</h1>";
        echo "<button class='btn btn-lg btn-danger btn-block' onclick='deslogear()'>Desloguear</button>";
      }
   }

?>