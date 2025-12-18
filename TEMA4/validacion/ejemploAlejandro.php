
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    ?>
</head>
<body>
    <p><b>isset()</b> verifica si una variable está definida y no es NULL</p>
    <p><b>empty()</b> devuelve true si la variable no está definida, tiene el valor 0, "", null o es un array vacio</p>

    <?php 
    echo "<h3> Caso 0.1: isset() devuelve true y empty() devuelve true </h3>";
    $valor = 0;
    echo "<p>Valor: 0</p>";
    if(isset($valor)) echo "<p>La variable \$valor está definida</p>";
    else echo "<p> La variable \$valor no está definida o es NULL</p>";

    if(empty($valor)) echo "<p>La varibale \$valor es considerada vacía </p>";
    else echo "<p>La variable \$valor NO es considerada vacía</p>";

    echo "<h3> Caso 0.2: isset() devuelve false y empty() devuelve true </h3>";
    unset($valor);
    echo "<p>Valor: undefined</p>";
    if(isset($valor)) echo "<p>La variable \$valor está definida</p>";
    else echo "<p> La variable \$valor no está definida o es NULL</p>";

    if(empty($valor)) echo "<p>La varibale \$valor es considerada vacía </p>";
    else echo "<p>La variable \$valor NO es considerada vacía</p>";

    echo "<h3> Caso 1: mi variable tiene el valor 'juan' </h3>";
    $nombre = "juan";
    if(isset($nombre)) echo "<p>La variable \$nombre está definida</p>";
    else echo "<p> La variable \$nombre no está definida o es NULL</p>";

    if(empty($nombre)) echo "<p>La varibale \$nombre es considerada vacía </p>";
    else echo "<p>La variable \$nombre NO es considerada vacía</p>";
    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //LOS SELECTS SI NO SE ESCOGE NINGUNA OPCIÓN HACE QUE LA CLAVE--VALOR NO EXISTA,
        // POR ESO HAY QUE USAR ISSET PARA LOS SELECT--OPTION
        print_r($_POST);
        $tmp_nombre = $_POST["nombre"];
        $tmp_edad = $_POST["edad"];

        if(!isset($_POST["genero"])){
            $err_genero = "<p style='background-color:red;'>Inserta un género</p>";
        }else{
            $genero = $_POST["genero"];
        }
        if($tmp_nombre == ""){
            $err_nombre = "<p style='background-color:red;'>Inserta un nombre</p>";
        }else{
            $nombre = $tmp_nombre;
        }
        if($tmp_edad == ""){
            $err_edad = "<p style='background-color:red;>Inserta una edad válida</p>";
        }elseif($tmp_edad < 0){
            $err_edad = "<p style='background-color:red;>Mete un número mayor a cero</p>";
        }else{
            $edad = $tmp_edad;
        }
    }
    ?>

    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"> 
        <?php if(isset($err_nombre))  echo $err_nombre;?><br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad">
        <?php if(isset($err_edad))  echo $err_edad;?><br>
        <select name="genero">
            <option disabled selected>--ELIGE UNA OPCION--</option>
            <option value="M">Mujer</option>
            <option value="H">Hombre</option>
            <option value="O">Otro</option>
        </select>
        <?php if(isset($err_genero)) echo $err_genero; ?>
        <input type="submit" value="ENVIAR">
    </form>

    <?php
    if(isset($nombre) && isset($edad) && isset($genero)){
        echo "<p style='color:green';>Nombre: $nombre, Edad: $edad, Género: $genero</p>";
    }
    ?>


</body>
</html>