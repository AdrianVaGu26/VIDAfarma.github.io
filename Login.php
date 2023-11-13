<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,400;0,500;1,200&display=swap" rel="stylesheet">

</head>

<body>
    <div class="login-form-container">
        <div class="login-form">
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_user.php";
            ?>
            <center>
                <h2>Bienvenido</h2>
            </center>
            <p>Ingrese la cuenta con la que se ha registrado</p>
            <form method="POST">
                <div class="mb-3">
                    <label>
                    <i class='bx bxl-gmail'></i>
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    </label>
                </div>
                <center>
                <button type="submit" class="btn btn-primary" name="btniniciar" value="Ok">Iniciar Sesión</button>
                </center>
                <div class="button-and-link-container">
                <p class="create-account-link">
                    <a href="register.user.php">Crear cuenta</a>
                </p>
            </div>
            </form>
        </div>
    </div>
</body>

</html>
