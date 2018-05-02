$(function () {
  //alert("Entré aquí");
  $(document).on("submit","#btn-pagar",function(event){
    idFactura=$("#idFactura").val();
    idFormaEnvio=$("#idFormaEnvio").val();
    idClaseEnvio=$("#idClaseEnvio").val();
    idEmpresaEnvio=$("#idEmpresaEnvio").val();
    idDireccionEnvio=$("#idDireccionEnvio").val();
    event.preventDefault();
    //alert("Entré aquí 2");
    $.ajax({
        type:"POST",
        url:"ajax/gestionar-Factura.php",
        dataType:"JSON",
        data:{
          "accion":"pagar",
          "idFactura": idFactura,
          "idFormaEnvio": idFormaEnvio,
          "idClaseEnvio": idClaseEnvio,
          "idEmpresaEnvio": idEmpresaEnvio,
          "idDireccionEnvio": idDireccionEnvio

        },
        success:function(respuesta){
           //alert("Entré aquí 3");
           
            if(respuesta == "0"){
                alert(respuesta.mensaje);
                header('Location: index.php');
            }else{
              alert(respuesta.mensaje);
            }
        },
            error:function(e){
              console.log(e);
            }
    });
  });
});