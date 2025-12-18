<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /**
     * 
     * new mysqli es el constructor es el constructor de la clase myaqli, se utiliza para inicializar un objeto que representa la conexion a bbdd
     * 
     * si se produce conexion, la variable contendrá un objeto de la clase mysqli que podremos usar con la bbdd
     * si se produce fallo a conectarse, el método "connect_error" de este objeto contendrá info sobre el porque no hemos podido conectarnos
     * 
     * 
     */
    $_servidor = "localhost";
    $_usuario = "MEDAC";
    $_contrasena = "MEDAC";
    $_bd = "peliculas_bd";

    $_conexion = new mysqli($_servidor, $_usuario, $_contrasena, $_bd);

    if($_conexion->connect_error){
        die("Error en la conexion: " . $_conexion->connect_error);
    }
?>
</body>
</html>