function validarLogin()
{
	var usuario = $("#correo").val();
	var clave = $("#clave").val();
	var recordarme =  $("#recordarme").is(":checked"); // para saber si esta checkeado!
	console.log();
	var funcionAjax = $.ajax({ 
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			usuario:usuario,
			clave:clave,
			recordarme:recordarme}
	});


	funcionAjax.done(function(respuesta)
	{
		MostarLogin();
		//alert(respuesta);
	});


}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			MostarBotones();
			MostarLogin();
			$("#usuario").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});

}
function MostarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	});
	funcionAjax.done(function(retorno){
		$("#botonesABM").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}
