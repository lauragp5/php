<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <?php error_reporting(E_ALL);
    ini_set("display_errors", 1); 
    if (!isset($_SESSION["usuario"])) { //compruebo si el usuario está registrado, si no lo está lo envío a index
        header("location:index.php");
        exit;
    }
    if(!isset($_SESSION["admin"])){ //compruebo si el usuario, que ya sé que está registrado, es admin
        header("location:index.php");
        exit;
    }
    require "sesion/conexion.php";
    ?>
</head>
<body>
    <?php
    $consulta = "SELECT nombre_estudio FROM estudios";
    $resultado = $_conexion->query($consulta);
    $estudios = [];
    while($fila = $resultado->fetch_assoc()){
        $estudios[] = $fila["nombre_estudio"];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //sanitizar y recoger los datos
        $titulo = trim($_POST["titulo"]);
        $nombre_estudio = trim($_POST["nombre_estudio"]);
        $anno_estreno = trim($_POST["anno_estreno"]);
        $num_temporadas = trim($_POST["num_temporadas"]);
        $duracion = trim($_POST["duracion"]);
    }

    /**
     * titulo: que no esté vacío, más de un caracter y menos de 80
     * año estreno: que no esté vacío // numero entero // entre 1900 y 2100
     * numero entregas: que no esté vacío // que sea un número entero o decimal // que tenga 1 o más temporadas y menos de 90
     * duración: que no esté vacío // que sea entero o decimal // que tenga más de 60
     */
    ?>

    <div class="container mt-4">
        <h1 class="fs-1">Crear una peli</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Título de la película</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Estudio</label>
                <select name="nombre_estudio" class="form-select">
                    <option value="" disabled selected>--Elija un estudio--</option>
                    <?php
                    foreach ($estudios as $estudio) {
                    ?>
                    <option value="<?= $estudio?>"><?= $estudio ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="form-label">Año estreno</label>
                <input type="text" name="anno_estreno" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Número Entregas</label>
                <input type="text" name="num_temporadas" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Duración (en minutos)</label>
                <input type="text" name="duracion" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Crear peli" class="btn btn-success">
            </div>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>