<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numero"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $numero=$_POST["numero"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" insert into personas(nombre,apellido,numero,fecha_nac,correo)values('$nombre','$apellido','$numero','$fecha_nac','$correo') ");
        if ($sql==1){
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Hay un campo vacio...</div>';
    }
}
?>