<?php
    //para mostrar por pantalla
    echo "hola mundo";
    //para declarar una variable no hay que indicar el tipo
    //solo hay que poner $nombredelavariable
    $nombre = "Jesús";
    $edad = 24;
    //poniendo .0 a un numero entero forzamos que sea un float
    $altura = 1.89;
 
    echo "<br>"; //salto de linea
    echo "El nombre de mi compi es $nombre, tiene $edad años y mide $altura metros";
    //mismo mensaje pero concatenando
    echo "<br>";
    echo "El nombre de mi compi es ".$nombre.", tiene " .$edad."años y mide ".$altura." metros";
    echo "<br>";
    echo "la suma de la variable edad y la variable altura es:". $edad + $altura;

    echo "<br>";
     $num1 = 10;
     $num2 = 20;
    
     
     echo " La suma es: ". $num1 + $num2;
     echo "<br>";

     echo "La resta es: ". $num1 - $num2;
     echo "<br>";

     echo "La multiplicación es: ". $num1 * $num2;
     echo "<br>";

     echo "La división es: ". $num1 / $num2;
     echo "<br>";

     //otra forma
     $num1 += $num2;
     echo " La suma es: $num1";
     echo "<br>";

     $num1 = 10;
     $num1 -= $num2;
     echo "La resta es: $num1";
     echo "<br>";

     $num1 = 10;
     $num1 *= $num2;
     echo "La multiplicación es: $num1";
     echo "<br>";

     $num1 = 10;
     $num1 /= $num2;
     echo "La división es: $num1";
     echo "<br>";

     echo gettype ($num1);
     $caso1 = $num1 < $num2;
     echo "<br>";
     echo ($caso1);

     //varios condicionales
     $num1 = 10;
     $num2 = 20;
     $caso1 = ($num1 > $num2) and (10<=11);

     $caso2 = $num1 == $num2;

     $caso2 = $num1 === $num2; //así comparamos el tipo

     echo "Es 21 igual a 13 y es 14 menor o igual que 20".((21 == 13) && 14 <= 20) ."<br>";
     echo "Es 14 mayor o igual a 2 o es 21 menor que 20?" .((14 >= 2) || (21 < 20)) ."<br>";


     define("PI", 3.14159);

     echo PI;

     
     $numerito = 1.4;
     echo "Número decimal";
     var_dump($numerito); //otra forma de imprimir (muestra tipo y valor)
     echo "<br>";

     $deIntAString = strval($numerito); //convierte en String y lo guarda en una variable

     var_dump($deIntAString);
     echo "<br>";

     //para pasar de String a int usamos intVal

     $frasecita = "2586";
     var_dump($frasecita);
     echo "<br>";
     $deStringAInt = intval($frasecilla);
     var_dump($deStringAInt);
     echo "<br>";
?>