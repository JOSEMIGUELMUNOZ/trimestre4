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
        h1 {
            text-align: center;
            color: #ff79c6;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
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
            background-color: #fff;
        }

        th {
            background-color: #1e90ff;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 16px;
        }

        td {
            color: #333;
        }

        tr:hover {
            background-color: #e6f7ff;
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
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
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
                        <a class="nav-link dropdown-toggle" href="unidad2.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
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
                        <a class="nav-link dropdown-toggle" href="unidad3.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
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
    <div class="jumbotron">
        <h1 class="display-4">MOSTRAR DATOS</h1>
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "bdmar";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("La conexion fallo:" . $conexion->connect_error);
        }
        $sql = "SELECT * FROM marvel";
        $resultado = $conexion->query($sql);
        ?>
        <div class="container">
            <h1>TABLA DE RESULTADOS 2</h1>
            <?php
            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Fecha de Nacimiento</th><th>Lugar de Origen</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["fdn"] . "</td><td>" . $row["ldg"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron registros en la base de datos";
            }
            $conexion->close();
            ?>
        </div>
    </div>
</body>

</html>
