<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones de formato recibido</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(filter_var($_POST["entero"], FILTER_VALIDATE_INT)){
                $entero = "<span class= El valor ingresado es un número entero</span>";
            }else{
                $entero = "<span class= El valor ingresado NO es un número entero</span>";
            }
        }
    ?>
    <!--Para validar emails comprueba el @, el punto y que después del punto haya letras (puede haber números pero tiene que empezar por letra
        Para validar url lo que comprueba es que tenga http:// o https:// no mira nada más-->


    <form action="" method="POST">
        <label for="entero">Introduce un número entero:</label>
        <input type="text" name="entero">
        <?php echo $entero ?>

        <label for="decimal">Introduce un número decimal:</label>
        <input type="text" name="decimal">

        <label for="email">Introduce un email:</label>
        <input type="text" name="email">

        <label for="url">Introduce una URL:</label>
        <input type="text" name="url">
    </form>
</body>
</html>