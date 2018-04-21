$(function () {
$(document).on("submit","#form-signin",function(event){
	event.preventDefault();
	
	$.ajax({
		type:"POST",
		url:"Ajax/gestionar-Login.php",
		dataType:"JSON",
		data:$(this).serialize(),
		success:function(respuesta){
			alert(respuesta);
			console.log(respuesta);
			if (respuesta.ans=="0") {
                window.location='principal.php';
            }
		}

	});

	});	
	});