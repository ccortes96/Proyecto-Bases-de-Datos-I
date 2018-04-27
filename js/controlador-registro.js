$(function () {
$(document).on("submit","#form-registro",function(event){
	event.preventDefault();
	$.ajax({
		type:"POST",
		url:"Ajax/gestionar-Registro.php",
		dataType:"JSON",
		data:$(this).serialize(),
        success:function(respuesta){
            alert(respuesta);
            if(respuesta == 'Registro realizado correctamente'){
            window.location='iniciarsesion.php';
			}
		}
	});

	});	
	});
