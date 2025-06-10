<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "harry_potter2";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

$sql = "SELECT p.personaje_id, p.nombre_personaje, c.nombre_casa, ro.nombre_rol, h.nombre_hechizo, o.nombre_objeto
        FROM personajes p
        JOIN casa c ON p.casa_id = c.casa_id
        JOIN rol ro ON p.rol_id = ro.rol_id
        JOIN hechizo h ON p.hechizo_id = h.hechizo_id
        JOIN objeto_magico o ON p.objeto_magico_id = o.objeto_magico_id";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Harry Potter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <a class="navbar-brand" href="index.html">HARRY POTTER</a>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Personajes del Mundo Mágico</h1>
        <?php if ($resultado->num_rows > 0) : ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Casa</th>
                    <th>Rol</th>
                    <th>Hechizo</th>
                    <th>Objeto Mágico</th>
                </tr>
                <?php while ($fila = $resultado->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $fila['personaje_id']; ?></td>
                        <td><?php echo $fila['nombre_personaje']; ?></td>
                        <td><?php echo $fila['nombre_casa']; ?></td>
                        <td><?php echo $fila['nombre_rol']; ?></td>
                        <td><?php echo $fila['nombre_hechizo']; ?></td>
                        <td><?php echo $fila['nombre_objeto']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else : ?>
            <p>No se encontraron personajes.</p>
        <?php endif; ?>
        <div class="button-container">
            <a href="miguel05.php" class="btn-hp">Agregar Nuevo Personaje</a>
            <a href="index.html" class="btn-hp">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>

<?php
$conexion->close();
?>
