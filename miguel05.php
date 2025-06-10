<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "harry_potter2";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_personaje = $_POST['nombre_personaje'];
    $casa_id = $_POST['casa_id'];
    $rol_id = $_POST['rol_id'];
    $hechizo_id = $_POST['hechizo_id'];
    $objeto_magico_id = $_POST['objeto_magico_id'];

    $sql = "INSERT INTO personajes (nombre_personaje, casa_id, rol_id, hechizo_id, objeto_magico_id)
            VALUES ('$nombre_personaje', '$casa_id', '$rol_id', '$hechizo_id', '$objeto_magico_id')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p class='success'>Personaje agregado con éxito.</p>";
    } else {
        echo "<p class='error'>Error al agregar el personaje: " . $conexion->error . "</p>";
    }
}

$sql_casa = "SELECT * FROM casa";
$resultado_casa = $conexion->query($sql_casa);
$sql_rol = "SELECT * FROM rol";
$resultado_rol = $conexion->query($sql_rol);
$sql_hechizo = "SELECT * FROM hechizo";
$resultado_hechizo = $conexion->query($sql_hechizo);
$sql_objeto = "SELECT * FROM objeto_magico";
$resultado_objeto = $conexion->query($sql_objeto);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personaje</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <a class="navbar-brand" href="index.html">HARRY POTTER</a>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Agregar Nuevo Personaje</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre_personaje">Nombre del Personaje:</label>
            <input type="text" id="nombre_personaje" name="nombre_personaje" required>

            <label for="casa_id">Casa:</label>
            <select id="casa_id" name="casa_id" required>
                <?php while ($row = $resultado_casa->fetch_assoc()) : ?>
                    <option value="<?php echo $row['casa_id']; ?>"><?php echo $row['nombre_casa']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="rol_id">Rol:</label>
            <select id="rol_id" name="rol_id" required>
                <?php while ($row = $resultado_rol->fetch_assoc()) : ?>
                    <option value="<?php echo $row['rol_id']; ?>"><?php echo $row['nombre_rol']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="hechizo_id">Hechizo:</label>
            <select id="hechizo_id" name="hechizo_id" required>
                <?php while ($row = $resultado_hechizo->fetch_assoc()) : ?>
                    <option value="<?php echo $row['hechizo_id']; ?>"><?php echo $row['nombre_hechizo']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="objeto_magico_id">Objeto Mágico:</label>
            <select id="objeto_magico_id" name="objeto_magico_id" required>
                <?php while ($row = $resultado_objeto->fetch_assoc()) : ?>
                    <option value="<?php echo $row['objeto_magico_id']; ?>"><?php echo $row['nombre_objeto']; ?></option>
                <?php endwhile; ?>
            </select>

            <input type="submit" value="Agregar Personaje">
        </form>
        <div class="button-container">
            <a href="miguel04.php" class="btn-hp">Volver a Mostrar</a>
            <a href="index.html" class="btn-hp">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>

<?php
$conexion->close();
?>
