<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query( "delete from personas where id_persona=$id ");
    if ($sql==1){
        echo '<div class="alert alert-success">Persona eliminada</div>';
    }else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}
?>