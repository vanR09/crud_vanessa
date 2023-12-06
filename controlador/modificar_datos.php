<?php
if(!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numero"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $numero=$_POST["numero"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];
        $sql=$conexion->query(" update personas set nombre='$nombre', apellido='$apellido', numero='$numero', fecha_nac='$fecha_nac', correo='$correo' where id_persona=$id ");
       if ($sql==1){
        header("location:index.php");
       } else{
        echo '<div class="alert alert-danger">Error al modificar</div>';
       }
    }else{
        echo '<div class="alert alert-warning">Hay un campo vacio...</div>';
    }
}
?>