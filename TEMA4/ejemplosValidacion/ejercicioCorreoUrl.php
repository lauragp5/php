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
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ej2"] == "enviar"){
        $tmp_correo = $_POST["correo"];
        if($tmp_correo == ""){
            $err_correo = "Introduzca un correo";
        }else{
            $tmp_correo0 = $tmp_correo;
            $tmp_correo = trim($tmp_correo); //quitar los espacios en blanco de los lados
            $tmp_correo = htmlspecialchars($tmp_correo);
            $tmp_script = filter_var(FILTER_SANITIZE_EMAIL, $tmp_script);

            if(strlen($tmp_script) < 5 || strlen($tmp_script) > 70){
                $err_script = "Introduce un mensaje entre 5 y 70 caracteres";
            }else{
                $script = $tmp_script;
            }
        }

    }   
    ?>
</body>
</html>