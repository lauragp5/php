<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
    <title>Formulario</title>
</head>
<body>
    <form action="formulario2.php" method= "POST">
        <label for="mensaje">Mensaje: </label>
        <input type="text" name="mensaje"><br>

        <label for="mensaje">Veces: </label>
        <input type="text" name="veces"><br>
        
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>