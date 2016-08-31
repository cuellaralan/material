<?php 
session_start(); //tiene que estar cuando se trabaje con sesiones lo que hace es habilitar el acceso a la variable local $_session
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$recordar=$_POST['recordarme'];

$retorno;

if($usuario=="admin@admin.com" && $clave=="666")
{			
	if($recordar=="true")
	{
		setcookie("registro",$usuario,  time()+36000 , '/'); //para destruir la cockie en x seg
		
	}else
	{
		setcookie("registro",$usuario,  time()-36000 , '/');
		
	}
	//$_SESSION['registrado']="octavio";
	$_SESSION['admin']="admin"; // hacer $_SESSION['admin']="admin" y $_SESSION['user']="user" 

	//$retorno=" ingreso";
	$retorno= $_SESSION['admin'];
	
}if ($usuario=="comp@comp.com" && $clave=="123") {
	if($recordar=="true")
	{
		setcookie("registro",$usuario,  time()+36000 , '/'); //para destruir la cockie en x seg
		
	}else
	{
		setcookie("registro",$usuario,  time()-36000 , '/');
		
	}
	//$_SESSION['registrado']="octavio";
	$_SESSION['comp']="comp"; // hacer $_SESSION['admin']="admin" y $_SESSION['user']="user" 

	//$retorno=" ingreso";
	$retorno= $_SESSION['comp'];
}
if ($usuario=="vend@vend.com" && $clave=="321") {
	if($recordar=="true")
	{
		setcookie("registro",$usuario,  time()+36000 , '/'); //para destruir la cockie en x seg
		
	}else
	{
		setcookie("registro",$usuario,  time()-36000 , '/');
		
	}
	//$_SESSION['registrado']="octavio";
	$_SESSION['vend']="vend"; // hacer $_SESSION['admin']="admin" y $_SESSION['user']="user" 

	//$retorno=" ingreso";
	$retorno= $_SESSION['vend'];
}
else
{
	$retorno= "No-esta";
}

echo $retorno;
?>