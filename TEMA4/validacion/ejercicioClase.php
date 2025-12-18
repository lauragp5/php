<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar comentario</title>
    <?php error_reporting(E_ALL);
            ini_set("display_errors", 1); ?>
</head>
<body>
    <form action="">
        <input type="hidden" name="form" value="mensaje">
        <label for="correo"> Introduzca algo: </label>
        <input type="text" name="mensaje" id=""><br>
        <?php
            if(isset($mensaje, $email_sanitizado)){ //esto es como si hago isset de email e email_sanitizado por separado
                echo "Email original: $email <br>";
                echo "Email sanitizado: $email_sanitizado";
            } 
             ?>
        <input type="submit" value="ENVIAR">
    </form>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $nombre = $_POST["mensaje"];
            $nombre_sanitizado = filter_var($nombre, FILTER_SANITIZE_ENCODED);
            
        }
    ?>
</body>
</html>