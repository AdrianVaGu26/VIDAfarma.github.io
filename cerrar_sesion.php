<?php
// Iniciar o reanudar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Cierre de Sesión</title>
</head>

<body>
    <script>
        // Función para mostrar la ventana de confirmación
        function confirmarCierreSesion() {
            // Ventana emergente de confirmación
            var confirmacion = confirm("¿Estás seguro de que deseas cerrar la sesión?");
            if (confirmacion) {
                // Si el usuario hace clic en "Aceptar", destruir la sesión y redirigir
                <?php
                // Destruir todas las variables de sesión
                session_unset();

                // Destruir la sesión
                session_destroy();
                ?>

                // Redirigir a la página de inicio de sesión
                window.location.href = "Login.php";
            } else {
                // Si el usuario hace clic en "Cancelar", redirigir a la página de menú
                window.location.href = "menu.php";
            }
        }

        // Llamar a la función cuando la página se carga
        window.onload = confirmarCierreSesion;
    </script>
</body>

</html>
