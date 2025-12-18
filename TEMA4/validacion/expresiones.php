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
        /**
         * /patron/: es el patrón de la expresión regular
         * 
         * PATRONES COMUNES: 
         * \d : un dígito del 0 al 9
         * \w : un caracter alfanumerico (letras, números y guión bajo)
         * \s : un espacio en blanco
         * . : cualquier caracter exceptuando el salto de línea (no se suele usar)
         * + : uno o más de la expresión anterior (\d+ pej sería uno o más dígitos)
         * * : cero o más de la expresión anterior
         * ^ : comienza con por ejemplo ^\d empieza por un digito
         * $ : termina con
         * []: define un conjunto de caracteres que puede coincidir con cualquiera de los caracteres que están dentro de un conjunto (pej: [$GK7o]) [a-z] [A-Z] [a-zA-Z]
         * {} : se repetirá el patrón anterior x numero de veces, si pones {2, 5} se repetirá de 2 a 5 veces. {8,}: 8 o más veces, {,8} hasta 8 veces
         * (?=.*) : Es una expresión de búsqueda anticipada positiva que verifica que la condición dentro de los paréntesis esté en algún lugar de la cadena
         * 
         */

        /**
         * preg_replace
         * 
         * $variable = preg_replace (/patron/, lo que quiero que ponga, $variable);
         */

        $cadena = "hola123";
        



        if(preg_match("/\d/", $cadena)){
            echo "la cadena tiene numeros";
        }
        else{
            echo "la cadena no tiene numeros";
        }

        $cadena = "Hola";

        if(preg_match("/\w/", $cadena)){
            echo "la cadena tiene caracteres alfanumericos";
        }
        else{
            echo "la cadena no tiene caracteres alfanumericos";
        }

        if(preg_match("/\s{5}/", $cadena)){
            echo "la cadena tiene cinco espacios";
        }
        else{
            echo "la cadena no tiene cinco espacios";
        }

        if(preg_match("/^\d{3}/", $cadena)){
            echo "la cadena comienza con 4 numeros";
        }
        else{
            echo "la cadena comienza con 4 numeros";
        }

        /**
         * primer requisito: que haya una mayúscula (?=.*[A-Z])
         * sengudo requisito: que haya una minúscula (?=.*[a-z])
         */
        $contrasena = "Hola123";

        if(preg_match("/(?=.*[A-Z])(?=.*[a-z])[a-zA-Z0-9]{8}/", $contraseña)){
            //aquí estoy pidiendo que tenga al menos una mayúscula y una minúscula y le digo que PUEDE tener letras minúsculas o mayúsculas o números y que la longitud es 8
        }
        
    ?>
</body>
</html>