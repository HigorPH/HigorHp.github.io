<?php

include "modelo/conexion.php";

$id=$_GET["id"];

$sql=$conn->query(" select * from persona where id_persona = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<form class="col-4 p-3 m-auto" method="POST">
                    <h3 class="text-center text-secondary">Modificar Cliente</h3>
                   <input type= "hidden" name= "id" value= "<?= $_GET["id"]?>"> 
                    <?php 
               include "controlador/modificar_producto.php";

                while ($datos=$sql->fetch_object()) { ?>
                   
                   <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido de la Persona</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DNI</label>
                        <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha_Nacimiento</label>
                        <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
                    </div>

                <?php }
                    ?>
                    
                    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
                </form>
    
</body>
</html>