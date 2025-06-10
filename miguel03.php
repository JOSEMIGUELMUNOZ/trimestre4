<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.cdnfonts.com/css/break-love" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/jomolhari-2" rel="stylesheet">
  <title>miguel</title>
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Arial', sans-serif;
    }

    h1 {
      text-align: center;
      color: white;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 50px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 15px;
      text-align: center;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:nth-child(odd) {
      background-color: #ffffff;
    }

    th {
      background-color: #1e90ff;
      color: white;
      text-transform: uppercase;
      font-weight: bold;
    }

    td {
      color: #333;
    }

    tr:hover {
      background-color: #e6f7ff;
    }

    .form-container {
      margin-top: 40px;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
      box-sizing: border-box;
    }

    .form-group input:focus {
      border-color: #1e90ff;
      outline: none;
    }

    .form-group button {
      padding: 12px 20px;
      background-color: #1e90ff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .form-group button:hover {
      background-color: #357ab8;
    }

    .form-group button:focus {
      outline: none;
    }
  </style>
</head>

<body>
  <nav style="background-color: #4a90e2; padding: 10px;">
    <div class="container-nav">
      <a class="navbar-brand" href="index.html" style="color: #fff; font-weight: bold;">INICIO</a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: #fff;">
              UNIDAD 1
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="miguel01.php">Mostrar datos</a>
              <a class="dropdown-item" href="miguel02.php">Practica 2</a>
              <a class="dropdown-item" href="miguel03.php">Practica 3</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad2.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: #fff;">
              UNIDAD 2
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="miguel04.php">Practica 4</a>
              <a class="dropdown-item" href="miguel05.php">Practica 5</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad3.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: #fff;">
              UNIDAD 3
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="miguel06.html">Practica 6</a>
            <a class="dropdown-item" href="miguel07.html">Practica 7</a>
              <a class="dropdown-item" href="miguel08.html">Practica 8</a>
              <a class="dropdown-item" href="miguel09.html">Practica 9</a>
             
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container form-container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
      </div>
      <div class="form-group">
        <label for="fdn">Fecha de Nacimiento:</label>
        <input type="date" id="fdn" name="fdn" required>
      </div>
      <div class="form-group">
        <label for="ldg">Lugar de Origen:</label>
        <input type="text" id="ldg" name="ldg" required>
      </div>
      <div class="form-group">
        <button type="submit">Agregar Personaje</button>
      </div>
    </form>
  </div>

  <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
    <h1>Datos</h1>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "bdmar";
    $conexion = new mysqli($servername, $username, $password, $database);

    function insertarpersonaje($conexion)
    {
      if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $fdn = $_POST["fdn"];
        $ldg = $_POST["ldg"];

        $sql = "INSERT INTO marvel (nombre, edad, fdn, ldg) VALUES ('$nombre', '$edad', '$fdn', '$ldg')";
        if ($conexion->query($sql) === TRUE) {
          header("Location: " . $_SERVER['PHP_SELF']);
          exit();
        } else {
          echo "Error al agregar el personaje: " . $conexion->error;
        }
      }
    }
    insertarpersonaje($conexion);
    // Mostrar los registros de la base de datos
    $sql = "SELECT * FROM marvel";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows > 0) {
      echo "<table class='table table-bordered'>";
      echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Fecha de Nacimiento</th><th>Lugar de Origen</th></tr>";
      while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["fdn"] . "</td><td>" . $row["ldg"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No se encontraron registros en la base de datos";
    }
    $conexion->close();
    ?>
  </div>
</body>

</html>
