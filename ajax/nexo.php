<?php 

require_once("clases/AccesoDatosProductos.php");
require_once("clases/productos.php");
require_once("clases/AccesoDatos.php");
require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'foto':
		include("partes/imagen.php");
		break;
	case 'video':
			include("partes/video.html");
		break;	
	case 'MostarBotones':
			include("partes/botonesABM.php");
		break;
	case 'MostrarGrilla':
			include("partes/formGrilla.php");
		break;
	case 'MostarLogin':
			include("partes/formLogin.php");
		break;
	case 'MostrarFormAlta':
			include("partes/formCd.php");
		break;
	case 'BorrarCD':
			$cd = new productos();
			$cd->id=$_POST['id'];
			$cantidad=$cd->BorrarCd();
			echo $cantidad;

		break;
	case 'GuardarCD':
			$cd = new productos();
			$cd->id=$_POST['id'];
			$cd->nombre=$_POST['nombre'];
			$cd->codigo=$_POST['codigo'];
			$cd->imagen=$_POST['imagen'];
			$cantidad=$cd->GuardarCD();
			echo $cantidad;

		break;
	case 'TraerCD':
			$cd = productos::TraerUnCd($_POST['id']);		
			echo json_encode($cd) ;

		break;
	case 'MostrarUsuarios':
		include("partes/MostrarUsuarios.php");
		
		# code...
		break;

	default:
		# code...
		break;
}

 ?>