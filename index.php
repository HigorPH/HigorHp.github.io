<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENTREGABLE 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/94479b1e6e.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('3.jpg'); /* Establecer la imagen de fondo */
            background-size: cover; /* Ajustar el tamaño de la imagen para cubrir todo el fondo */
            font-family: Arial, sans-serif; /* Cambiar tipo de fuente */
        }
        .container {
            margin-top: 50px; /* Cambiar margen superior */
        }
        h4 {
            color: whitesmoke; /* Cambiar color del título */
        }
        label {
            color: black; /* Cambiar color de las etiquetas */
            font-weight: bold; /* Hacer las etiquetas en negrita */
        }
        .form-control {
            border-color: red; /* Cambiar color del borde de los inputs */
        }
        .btn-primary {
            background-color: #007bff; /* Cambiar color de fondo del botón */
            border-color: #007bff; /* Cambiar color del borde del botón */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Cambiar color de fondo del botón al pasar el mouse */
            border-color: #0056b3; /* Cambiar color del borde del botón al pasar el mouse */
        }
    </style>



</head>

<body>
    <div class="container">

<?php
   include "modelo/conexion.php";
  include "controlador/eliminar_persona.php"
?>

        <div class="container-fluid row">
            <div class="col-md-3">
                <form class="p-3" method="POST">
                    <h3 class="text-center text-secondary">Registro de Cliente</h3>
                    <?php 
                    include "modelo/conexion.php";
                    include "controlador/registro_persona.php";
                    
                    ?>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido de la Persona</label>
                        <input type="text" class="form-control" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DNI</label>
                        <input type="text" class="form-control" name="dni">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha_Nacimiento</label>
                        <input type="date" class="form-control" name="fecha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
                </form>
            </div>
            <div class="col-md-9 p-4">

                                    <table class="table">
                        <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">APELLIDO</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Fecha_Nacimiento</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col"></th>
                                    </tr>
                        </thead>
                        <tbody>
                            <?php
                include "modelo/conexion.php";
                $sql=$conn->query("select * from persona");
                while ($datos=$sql->fetch_object()) { ?>
                    
                                <tr>
                                <td><?= $datos->id_persona ?></td>   
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->correo ?></td>
                                <td>
                  <a href="modificar_producto.php?id=<?=$datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                   <a href="index.php?id=<?=$datos->id_persona?>" class= "btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                     </td>
                                     </tr>
                <?php }
                ?>
                                    
                           
                    </tbody>
                </table>
                </div>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>  
</body>
</html>