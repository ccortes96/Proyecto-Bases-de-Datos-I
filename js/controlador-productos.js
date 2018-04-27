$(document).ready(function(){
    //alert("hola1");
    controlador_productos();
});

function controlador_productos(){
    //alert("hola2");
    $.ajax({
            url:"Ajax/gestionar-Producto.php",
            dataType: "JSON",
            method: "POST",
            data: {"accion":"seleccionar"},
            success:function(respuesta){
                //alert("hola3");
                for (var i = 0; i < respuesta.length ; i++) {
                    var productos = respuesta[i];
                    console.log(respuesta);
                    var fila =  '<li>'+
                                '<div class="dotted_line"></div>'+
                                '   <div class="col-md-4 col-lg-4 col-sm-6" >'+
                                '       <div class="card">'+
                                '           <div class="card-header cards-courses-h">'+productos.producto+" "+productos.nombre+
                                '           </div>'+    
                                '           <div class="card-body">'+
                                '                   <h5 class="card-title">'+'</h5>'+
                                /*'                   <p class="card-text">Precio de venta: </p>'+
                                '                   <p class="card-text">'+carros.precioventa+'</p>'+*/
                                //'                   <img src="'+carros.foto+'" alt="" width="350" height="350">'+
                                '                   <p><a class="btn btn-primary" href="#" role="button">Ver producto &raquo;</a></p>'+
                                '           </div>'+
                                '       </div>'+
                                '   </div></li>';                   
                    $("#productos").append(fila);
                }
            },
            error:function(e){
                console.log(e);
            }
    });
}