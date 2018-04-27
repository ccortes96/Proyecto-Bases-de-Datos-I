<?php
    include("../Conexion/class-conexion.php");
    $conexion = new Conexion();
    $idDepartamento = $_POST['idDepartamento'];
    $query = "SELECT idSubdepartamento, descripcion FROM Subdepartamento WHERE Departamento_idDepartamento = $idDepartamento ORDER BY descripcion;";
    $resultado = $conexion -> ejecutarConsulta($query);

    $html = "<option value='0'>Selecciona un subdepartamento</option>";
    echo $html;
    while($rowSubdeptos = mysqli_fetch_array($resultado)) {
        $html = "<option value='".$rowSubdeptos[0]."'>".$rowSubdeptos[1]."</option>";
        echo $html;
    }
?>