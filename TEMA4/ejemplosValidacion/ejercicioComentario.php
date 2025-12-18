<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ej1"] == "enviar"){
        $tmp_script = $_POST["script"];
        if($tmp_script == ""){//en caso de que sea una lista esto no vale porque la clave ni siquiera se envía, en ese caso usamos isset
            $err_script = "Introduzca un mensaje";
        }else{
            $tmp_script0 = $tmp_script;
            $tmp_script = trim($tmp_script); //quitar los espacios en blanco de los lados
            $tmp_script = htmlspecialchars($tmp_script);
            $tmp_script = filter_var(FILTER_SANITIZE_SPECIAL_CHARS, $tmp_script);

            if(strlen($tmp_script) < 5 || strlen($tmp_script) > 70){
                $err_script = "Introduce un mensaje entre 5 y 70 caracteres";
            }else{
                $script = $tmp_script;
            }
        }

    }   
    ?>

    <form action="" method="post">
        <input type="text" name="script">
        <?php
        if(isset($err_script)){
            echo $err_script;
        } ?>
        <input type="submit" name="ej1" value="enviar">
        <?php if(isset($script)){
            echo "Mensaje original" . $tmp_script0 . " Mensaje sanitizado: " . $scrpit . "<br>";
        }
        ?>
    </form>
</body>
</html>