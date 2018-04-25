$(document).ready(function(){
	listarNombreUsuario();
	listarHistorial();
});


/*function listarHistorial(){
	$.ajax({
		url:"ajax/gestionar-historial-cursos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var cursos = respuesta[i];
				var fila = 
				'<tr>'+
				'	<td>'+cursos.Nombre +'</td>'+
				'	<td>'+cursos.Codigo+'</td>'+
				'	<td>'+cursos.Periodo_Academico + '</td>'+
				'	<td>'+cursos.Profesor + '</td>'+
				'	</tr>';
				$("#div-historial #tbl-historial tbody").append(fila);
			}
		},
		error: function(e)
		{
			console.log(e);
		}
	});
}*/

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
				$("#dropdown01").html(nombre);
			},
			error:function(e){
				console.log(e);
			}
	});
}

/*function listarCursosActivos(){
	$.ajax({
		url:"ajax/gestionar-seccion.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"listar-cursos-activos"
			},
			success:function(respuesta){
				
			},
			error:function(e){
				console.log(e);
			}
	});
}*/