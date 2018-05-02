$(function () {
	//alert("Hola");	
$(document).on("submit","#form-addcar",function(event){
	cantidad=$("#cantidad").val();
	idProducto=$("#idProducto").val();
	//alert("holaaa");
	event.preventDefault();
	$.ajax({
		url:"Ajax/gestionar-Carrito.php",
		dataType:"JSON",
		method:"POST",
		data:{
				"accion":"agregar",
				"idProducto":idProducto,
				"cantidad":cantidad
			},

		success:function(respuesta){

			//alert("Hola3");
			//alert(respuesta.mensaje);
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