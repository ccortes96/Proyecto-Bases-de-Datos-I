<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conection</title>
  </head>
  <body>

    <?php
        require("data_conection.php");

        /*Conexion mediante procedimientos*/
        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la DB";
            exit();
        }

        /*Busca la DB x Nombre*/
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la DB");

        /*Elegir el juego de caracteres */
        mysqli_set_charset($conexion,"utf8");

        $consulta="Select * from usuario";
        $resultados=mysqli_query($conexion,$consulta);

        while ($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)) {

          echo $fila['idUsuario'] . " ";
          echo $fila['pNombre'] . " ";
          echo "<br>";

        }

        mysqli_close($conexion);





     ?>

  </body>
</html>
