$(function () {
	//alert("Hola");	
$(document).on("submit","#form-car",function(event){
	idProducto=$("#idProducto").val();
	//alert(idProducto);
	event.preventDefault();
	$.ajax({
		url:"Ajax/gestionar-Carrito.php",
		dataType:"JSON",
		method:"POST",
		data:{
				"accion":"eliminar",
				"idProducto":idProducto
			},

		success:function(respuesta){

			//alert("Hola3");
			//alert(respuesta.mensaje);
			console.log(respuesta);
			if (respuesta.ans=="0") {
				alert(respuesta.mensaje)
                window.location='productoscarrito.php';
            }else{
            	alert(respuesta.mensaje)
            }
		},
            error:function(e){
            	console.log(e);
            }
	});

	});	
	});