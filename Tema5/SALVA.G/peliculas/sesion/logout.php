<?php 

session_start(); # Recogemos la sesion

$_SESSION = []; # Limpiamos el array de la sesion

session_destroy(); # Eliminamos todos los datos de la sesion 
                    # del servidor pero la cookie PHPESSID sigue existiendo
                    # (pero sin datos asociados)

header("location: login.php"); # Redirigir al cliente al login

exit();

?>