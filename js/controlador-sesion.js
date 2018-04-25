$(function () {
$(document).on("submit","#form-iniciarsesion",function(event){
	event.preventDefault();
	$.ajax({
		type:"POST",
		url:"../Ajax/gestionar-Login.php",
		dataType:"JSON",
		//data:$(this).serialize(),
		data:{
				"accion":"login",
				"username":$("#username").val(),
				"pass":$("#pass").val()
			},
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

$("#idsalir").click(function(){
	$.ajax({
			type:"POST",
			url:"../Ajax/gestionar-Login.php",
			dataType:"JSON",
			data:{
				"accion":"logout",
			},
			success:function(respuesta){
				if(respuesta.loggedin==0){
					window.location.href = "index.php";
				}
			},
			error:function(e){
				console.log(e);
			}
	});
});