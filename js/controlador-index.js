$(document).ready(function(){
	listarNombreUsuario();
});

function listarNombreUsuario(){
	$.ajax({
		url:"Ajax/gestionar-login.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerNombreUsuario"
			},
			success:function(respuesta){
				var nombre = respuesta;
				$("#txt_nombre").html(nombre);
			},
			error:function(e){
				console.log(e);
			}
	});
}
