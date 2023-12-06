<?php

include "modelo/conexion.php";

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM personas WHERE id_persona = $id");

if (!$sql) {
    die("Error en la consulta: " . $conexion->error);
}

var_dump($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
      <h3 class="text-center text-secondary">Modificar registro</h3>
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
      <?php
      include "controlador/modificar_datos.php";
      while($datos = $sql->fetch_object()) { ?>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" value="<?= $datos->nombre?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="apellido" value="<?= $datos->apellido?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" name="numero" value="<?= $datos->numero?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="exampleFormControlInput4" name="fecha_nac" value="<?= $datos->fecha_nac?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        <input type="text" class="form-control" id="exampleFormControlInput5" name="correo" value="<?= $datos->correo?>">
      </div>

     <?php }
      ?>
      
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar registro</button>
    </form>
</body>
</html>

