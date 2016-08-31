
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarCD();return false">
        <h2 class="form-ingreso-heading">Producto</h2>
        <label for="nombre" class="sr-only">Nombre</label>
        <input ty pe="text"  minlength="1"  id="nombre" class="form-control" placeholder="Nombre" required="" autofocus="">
       <input readonly   type="hidden"    id="id" class="form-control" >
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div>