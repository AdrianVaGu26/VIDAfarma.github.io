<?php
include "modelo/conexion.php";
$id_persona=$_GET["id_persona"];
$sql1 = $conexion->query("SELECT * FROM usuarios WHERE id_persona=$id_persona");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
        <h3 class="text-center text-secundary">Modificar Usuarios</h3>
        <input type="hidden" name="id_persona" value="<?=$_GET["id_persona"]?>">
        <?php
        include "controlador/modificar_usuario.php"; 
        while($datos=$sql1->fetch_object()) { ?>
        <div class="mb-3">
            <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?=$datos->correo?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña"value="<?=$datos->contraseña?>">
                    </div>
            </div>
            <?php
        }
        ?>
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="Ok">Modificar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>