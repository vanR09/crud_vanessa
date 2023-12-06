<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fadó.js" crossorigin="anonymous"> </script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Seguro que deseas eliminar este registro?");
            return respuesta 
        }
        </script>
  <h1 class="text-center p-3">¡¡¡Bienvenido a mi crud!!!</h1>
  <?php 
  include "modelo/conexion.php";
  include "controlador/eliminar_persona.php";
  ?>
  <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
      <h3 class="text-center text-secondary">Registro de personas</h3>
      <?php
      include "modelo/conexion.php";
      include "controlador/registro_persona.php"; 
      ?>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="apellido">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" name="numero">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="exampleFormControlInput4" name="fecha_nac">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        <input type="text" class="form-control" id="exampleFormControlInput5" name="correo">
      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
      <table class="table">
        <thead class="bg-info text-white"> 
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellido</th>
            <th scope="col">Numero</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Correo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <?php
            include "modelo/conexion.php";
            $sql=$conexion->query(" select * from personas ");
            while($datos=$sql->fetch_object()) { ?>
            <tr>
            <td><?= $datos->id_persona ?></td>
            <td><?= $datos->nombre ?></td>
            <td><?= $datos->apellido ?></td>
            <td><?= $datos->numero ?></td>
            <td><?= $datos->fecha_nac ?></td>
            <td><?= $datos->correo ?></td>
            <td>
              <a href="modificar_datos.php?id=<?=  $datos->id_persona ?>" class="btn btn-small btn-warning">Editar<i class="fa-solid fa-pen-to-square"></i></a>
              <a onclick="return eliminar()" href="index.php?id=<?=  $datos->id_persona ?>" class="btn btn-small btn-danger">Eliminar<i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
           <?php }
            ?>
          
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
