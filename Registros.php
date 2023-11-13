<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            padding: 100px;
            padding-top: 30px;
            background-color: aliceblue;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h3 class="text-center text-secondary">Registro de personas</h3>
                <?php
            // include "controlador/registro_persona.php";
             ?>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12 p-4">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">APELLIDO</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">FECHA DE NACIMIENTO</th>
                                    <th scope="col">CORREO</th>
                                    <th scope="col">CONTRASEÑA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "modelo/conexion.php";
                                $sql = $conexion->query("select * from persona");
                                while ($datos = $sql->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $datos->id_persona ?></td>
                                        <td><?= $datos->nombre ?></td>
                                        <td><?= $datos->apellido ?></td>
                                        <td><?= $datos->dni ?></td>
                                        <td><?= $datos->fecha_nac ?></td>
                                        <td><?= $datos->correo ?></td>
                                        <td><?= $datos->contraseña?></td>
                                        <td>
                                            <a href="modificar.php?id=<?= $datos->id_persona ?>" class="btn btn-info">Editar</a>
                                            <a href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-4">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">CORREO</th>
                                    <th scope="col">CONTRASEÑA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "modelo/conexion.php";
                                $sql1 = $conexion->query("select * from usuarios");
                                while ($datos = $sql1->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $datos->id_persona ?></td>
                                        <td><?= $datos->correo ?></td>
                                        <td><?= $datos->contraseña?></td>
                                        <td>
                                            <a href="modificar_user.php?id_persona=<?= $datos->id_persona ?>" class="btn btn-info">Editar</a>
                                            <a href="index.php?id_persona=<?= $datos->id_persona ?>" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
