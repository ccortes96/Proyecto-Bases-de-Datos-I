/*$(function () {
  alert("Entré");
  $(document).on("submit","#form-edit1",function(event){
    var saldo=$("#TextArea-Descripcion1").val();
    event.preventDefault();
    alert("Hola");
    $.ajax({
        url:"ajax/gestionar-Cuenta.php",
        method:"POST",
        dataType:"JSON",
        data:{
          "accion":"asaldo",
          "saldo": saldo
        },
        success:function(respuesta){
           alert("Entré aquí 3");
            if(respuesta == "0"){
                alert(respuesta.mensaje)
                window.location='factura.php';
            }alert(respuesta.mensaje)
        },
            error:function(e){
              console.log(e);
            }
    });
  });
});*/


//Crear comentario
$(function () {
    $(document).on("submit","#form-edit1",function(event){
        event.preventDefault();
        var saldo = $("#TextArea-Descripcion1").val();
        //alert(saldo);
        $.ajax({
            type:"POST",
            url:"ajax/gestionar-Cuenta.php",
            dataType:"JSON",
            data:{
                "accion":"asaldo",
                "saldo": saldo
            },
            success:function(respuesta){
              //alert("Entré aquí 3");
            if(respuesta == "0"){
                alert(respuesta.mensaje)
                window.location='factura.php';
            }},
              error:function(e){
                console.log(e);
            }


        });

    });
});