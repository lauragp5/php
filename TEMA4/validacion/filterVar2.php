<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php error_reporting(E_ALL);
            ini_set("display_errors", 1); ?>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //habría que validar esto también pero ahora estamos aprendiendo otra cosa
            $email = $_POST["correo"];
            $email_sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);

            $nombre = $_POST["nombre"];
            $nombre_sanitizado = filter_var($nombre, FILTER_SANITIZE_ENCODED);
            /*
            Para sanitizar cadenas: FILTER_SANITIZE_ENCODED
            
            Para sanitizar decimales: FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION si pones dos puntos en algún momento como 1.3.44 lo acepta, para filtrar que solo tenga un punto lo hacemos con validación

            Para sanitizar enteros: FILTER_SANITIZE_INT

            */
        }
    ?>

    <form action="" method="POST">
        <input type="hidden" name="form" value="correo"> <!--con esto en el if de request method añado && $_POST["form"] == "correo", de esta forma me aseguro de que busque un formulario en concreto y que no se ejecute todo-->
        <label for="correo"> Introduzca su correo: </label>
        <input type="text" name="correo" id=""><br>
        <?php
            if(isset($email, $email_sanitizado)){ //esto es como si hago isset de email e email_sanitizado por separado
                echo "Email original: $email <br>";
                echo "Email sanitizado: $email_sanitizado";
            } 
             ?>
        <input type="submit" value="ENVIAR">
    </form>

    <form action="" method="POST">
        <input type="hidden" name="form" value="nombre">
        <label for="nombre">Introduce tu nombre: </label>
        <input type="text" name="nombre" id=""> <br>
        <?php
            if(isset($nombre, $nombre_sanitizado)){
                echo "nombre original: $nombre <br>";
                echo "nombre sanitizado: $nombre_sanitizado";
            }
        ?>
    </form>
</body>
</html>