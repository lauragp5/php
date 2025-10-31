<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>

<body>
    <h3>Ejercicio 1</h3>
    <p>Crea un programa que muestre "Hola {aquí tu nombre}" usando una variable donde recojas tu nombre</p>

    <?php
    $nombre = "Laura";
    echo "Hola $nombre";
    ?>
    <br>
    <br>

    <h3>Ejercicio 2</h3>
    <p>Declara dos variables numéricas e imprime su suma, resta, multiplicación, división y módulo (%).
        Además, el mensaje deberá de ser el siguiente: "El resultado de la suma entre {valor variable 1} y {valor variable 2} es: {solucion}" </p>

    <?php
    $num1 = 15500;
    $num2 = 638;

    echo "El resultado de la suma entre $num1 y $num2 es: " . ($num1 + $num2) . "<br>";
    echo "El resultado de la resta entre $num1 y $num2 es: " . ($num1 - $num2) . "<br>";
    echo "El resultado de la multiplicación entre $num1 y $num2 es: " . ($num1 * $num2) . "<br>";
    echo "El resultado de la división entre $num1 y $num2 es: " . ($num1 / $num2) . "<br>";
    echo "El resultado del módulo entre $num1 y $num2 es: " . ($num1 % $num2) . "<br>";


    ?>

    <h3>Ejercicio 3</h3>
    <p>Declara una variable con el valor 5. Imprime su valor antes y después de aplicar el incremento y el decremento</p>
    <?php
    $numerillo = 5;
    echo $numerillo . "<br>";

    $numerillo++;
    echo $numerillo . "<br>";

    $numerillo--;
    echo $numerillo . "<br>";
    ?>

    <h3>Ejercicio 4</h3>
    <p>Declara dos variables numéricas y comprueba si: 1) el primero es mayor que el segundo
        2) ambos son iguales y mayores que 10 3) al menos uno es menor que 100 </p>

    <?php
    $numero1 = 15;
    $numero2 = 30;

    echo "Primero mayor que segundo? " . ($numero1 > $numero2) . "<br>";
    echo "Iguales y mayores que 10? " . (($numero1 == $numero2) && ($numero1 > 10) && ($numero2 > 10)). "<br>";
    echo "Al menos uno es menor de 100 " .(($numero1 < 100) || ($numero2 <100)). "<br>";
    ?>

    <h3>Ejercicio 5</h3>
    <p>Crea una variable fuera de una función e intenta imprimirla dentro de la función sin usar "global". En caso de no conseguirlo,       corrige la llamada a la variable.</p>
    <?php 
        $vari = "variable";
        function prueba(){
            global $vari;
            echo $vari;
        }
    ?>

    <h3>Ejercicio 6</h3>
    <p>Crea una función con una variable estática llamada "numerito" inicializada a 2.5, la función deberá de multiplicar por dos el valor de la variable estática y mostrarlo en el navegador. ¿Cambia el resultado de la multiplicación si llamamos a la función varias veces?</p>

    <?php
        function pruebilla(){
            static $numerito = 2.5;
            $numerito *= 2;
            echo $numerito;
        }
    ?>

    <h3>Ejercicio 7</h3>
    <p>Crea una función con una variable local llamada "numerito2" inicializada a 3.5, la función deberá de dividir por cuatro el valor de la variable local y mostrarlo en el navegador. ¿Cambia el resultado de la división si llamamos a la función varias veces?</p>
    <?php
        function pruebilla2(){
            static $numerito2 = 3.5;
            $numerito2 /= 4;
            echo $numerito2;
        }
    ?>

    <h3>Ejercicio 8</h3>
    <p>Define una constante llamada PHP con el valor "este lenguaje es precioso". Además, imprime el resultado de la constante dentro de una etiqueta h2</p>
    <?php
        define("PHP", "Este lenguaje es precioso");  
    ?>
    <h2><?php echo PHP ?> </h2>

    <h3>Ejercicio 9</h3>
    <p>Crea variables con un numero entero, un decimal, un número muy grande (haciendo uso de la notación científica), un booleano y un string. Ahora muestra cada variable haciendo uso de la función var_dump()</p>
        <?php
            $entero = 5;
            $decimal = 5.5;
            $booleano = true;
            $string = "hihihi";

            var_dump($entero);
            var_dump($decimal);
            var_dump($booleano);
            var_dump($string);
        ?>
    <h3>Ejercicio 10 </h3>
    <p>declara una variable llamada hobby que contendrá un string con tu pasatiempos favorito,  muestra esta cadena dentro de una etiqueta h1 haciendo uso de una etiqueta PHP diferente al del resto de ejercicios </p>

    

</body>

</html>