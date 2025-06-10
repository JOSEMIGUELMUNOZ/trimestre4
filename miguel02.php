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
    h1 {
      text-align: center;
      color: white;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 12px;
      text-align: center;
      border: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
      background-color: #ffffff;
    }

    th {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    td {
      color: #333;
    }

    table th,
    table td {
      border-left: 1px solid #ddd;
      border-right: 1px solid #ddd;
    }

    table tr:first-child th {
      border-top: 1px solid #ddd;
    }

    table tr:last-child td {
      border-bottom: 1px solid #ddd;
    }

    .dropdown-menu {
      background-color: #4a90e2;
      border: none;
      border-radius: 0;
    }

    .dropdown-item {
      color: #fff;
      padding: 10px 20px;
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
  <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "bdmar";
    $conexion = new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error) {
      die("Conexion Fallida: " . $conexion->connect_error);
    }
    $sql = "SELECT * FROM `marvel`";
    $resultado = $conexion->query($sql);
    ?>
    <div class="container">
      <h1>datos</h1>
      <?php if ($resultado->num_rows > 0): ?>
        <table>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad(años)</th>
            <th>Fecha de nacimiento</th>
            <th>Lugar de origen</th>
          </tr>
          <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
              <td><?php echo $fila['id']; ?></td>
              <td><?php echo $fila['nombre']; ?></td>
              <td><?php echo $fila['edad']; ?></td>
              <td><?php echo $fila['fdn']; ?></td>
              <td><?php echo $fila['ldg']; ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      <?php else: ?>
        <p>No se encontraron datos</p>
      <?php endif; ?>
    </div>

    <hr class="my-4" style="border-color: #658181;">
    <p class="lead" style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">
      Implementa Base De Datos Relacionales En Un Sistema De Informacion</p>
    <p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">
    </p>
    <p class="lead">
    </p>
  </div>
</body>

</html>