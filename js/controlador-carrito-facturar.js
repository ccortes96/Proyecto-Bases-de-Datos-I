$(function () {
	alert("Hola");	
$(document).on("submit","#form-fac",function(event){
	idDescuento=$("#idDescuento").val();
	idImpuesto=$("#idImpuesto").val();
	alert(idImpuesto);
	event.preventDefault();
	$.ajax({
		url:"Ajax/gestionar-Carrito.php",
		dataType:"JSON",
		method:"POST",
		data:{
				"accion":"facturar",
				"idDescuento": idDescuento,
				"idImpuesto": idImpuesto
			},

		success:function(respuesta){

			alert("Hola3");
			alert(respuesta.mensaje);
			console.log(respuesta);
			if (respuesta.ans=="0") {
				alert(respuesta.mensaje)
                window.location='factura.php';
            }
		},
            error:function(e){
            	console.log(e);
            }
	});

	});	
	});