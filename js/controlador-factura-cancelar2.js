$(function () {
	alert("Hola");	
$(document).on("submit","#btn-cancelar",function(event){
	idFactura=$("#idFactura").val();
	alert(idFactura);
	event.preventDefault();
	$.ajax({
		url:"Ajax/gestionar-Factura.php",
		dataType:"JSON",
		method:"POST",
		data:{
				"accion":"cancelar",
				"idFactura":idFactura,
			},

		success:function(respuesta){

			alert("Hola3");
			alert(respuesta.mensaje);
			console.log(respuesta);
			if (respuesta.ans=="0") {
				alert(respuesta.mensaje)
                window.location='productoscarrito.php';
            }
		},
            error:function(e){
            	console.log(e);
            }
	});

	});	
	});