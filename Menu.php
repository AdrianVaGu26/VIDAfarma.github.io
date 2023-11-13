<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Farmacia</title>
    <link rel="stylesheet" href="estilosmenu.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,400;0,500;1,200&display=swap" rel="stylesheet">
</head>
<header>
    <h3 class="icon-title"><i class='bx bx-plus-medical'></i>
    VIDAFarma BOTICA-PERFUMERÍA</h3>
    <div class="search-container">
        <input type="text" placeholder="Buscar..." name="search">
        <button type="submit"><i class='bx bx-search'></i></button>
    </div>
</header>

<body>
<nav>
<a href="?opcion=opcion1"><i class='bx bxs-capsule'></i>Medicamentos</a>
        <a href="?opcion=opcion2"><i class='bx bxs-bar-chart-alt-2'></i>Ventas</a>
        <a href="?opcion=opcion3"><i class='bx bxs-truck'></i>Proveedores</a>
        <a href="?opcion=opcion4"><i class='bx bxs-user'></i>Clientes</a>
        <a href="?opcion=opcion5"><i class='bx bxs-file'></i>Reportes</a>
        <a href="?opcion=opcion6"><i class='bx bxs-group'></i>Usuarios</a>
        <a href="?opcion=opcion7"><i class='bx bxs-category'></i>Categorías</a>
        <a href="?opcion=opcion8"><i class='bx bxs-offer'></i>Ofertas</a>
        <a href="cerrar_sesion.php"><i class='bx bxs-log-out'></i>Cerrar Sesión</a>
</nav>


<section>
    <?php
    $opcion = isset($_GET['opcion']) ? $_GET['opcion'] : '';

    // Mostrar contenido según la opción seleccionada
    switch ($opcion) {
        case 'opcion1':
            echo '<h2>Lista de Medicamentos</h2>';
            // Puedes agregar aquí el contenido específico para la Opción 1 (por ejemplo, lista de medicamentos)
            break;

        case 'opcion2':
            
            echo '<h2>Categorías de Medicamentos</h2>';
            // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
            break;
            case 'opcion3':
            
                echo '<h2>Categorías de Medicamentos</h2>';
                // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
                break;
                case 'opcion4':
            
                    echo '<h2>Categorías de Medicamentos</h2>';
                    // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
                    break;
                    case 'opcion5':
            
                        echo '<h2>Categorías de Medicamentos</h2>';
                        // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
                        break;
                        case 'opcion6':
                            include 'Registros.php';
                            echo '<h2>Categorías de Medicamentos</h2>';
                            // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
                            break;

        case 'opcion7':
            echo '<h2>Ofertas Especiales</h2>';
            // Puedes agregar aquí el contenido específico para la Opción 3 (por ejemplo, ofertas especiales)
            break;
            case 'opcion8':
            
                echo '<h2>Categorías de Medicamentos</h2>';
                // Puedes agregar aquí el contenido específico para la Opción 2 (por ejemplo, lista de categorías)
                break;

        default:#ffffff
            echo '<h2>Bienvenido a la Farmacia</h2>';
            // Puedes agregar aquí el contenido predeterminado
            break;
    }
    ?>
</section>

</body>
</html>
