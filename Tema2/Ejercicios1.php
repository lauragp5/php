<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <?php
        function comparador ($a, $b, $c){
            if($a == $b && $a == $c){
                return "Los tres números son iguales";
            }

            else if($a == $b || $a == $c || $b == $c){
                
                return "al menos dos números son iguales";
            }
            else{
                return "Ningún número es igual a otro";
                }
        }

        //Ejercicio 2
        

        function login ($user, $pass){

            $user1 = "admin";
            $pass1 = "321";
            $user2 = "client";
            $pass2 = "123";

            if ($user == "" || $pass == ""){
                return "Faltan credenciales";
            }
            elseif($user === $user1 && $pass === $pass1 || $user === $user2 && $pass === $pass2){
                return "login successfull";
            }
            else{
                return "Usuario o contraseña no válido";
            }
        }

        //Ejercicio 3
        function calcularSuscripcion($plan, $estudiante, $anual){

            //compruebo el tipo de plan
            if($plan == "basic"){
                $mensualidad = 25;
            }
            else if($plan == "pro"){
                $mensualidad = 40;
            }
            else if($plan == "enterprise"){
                $mensualidad = 60;
            }
            else{
                return "Plan no disponible";
            }

            //compruebo los descuentos y creo la cadena que se devuelve 
            if ($estudiante && $anual){
                $mensualidad *= 0.85;
                $mensualidad *= 0.80;
                return "Plan $plan Total $mensualidad Descuento de estudiante y por plan anual";
            }

            else if ($estudiante){
                $mensualidad *= 0.85;
                return "Plan $plan Total $mensualidad Descuento de estudiante";
            }
            else if($anual){
                $mensualidad *= 0.80;
                return "Plan $plan Total $mensualidad Descuento por plan anual";
            }
            return "Plan $plan Total $mensualidad";

        }

        //echo calcularSuscripcion("basi", true, true);
    ?>
</body>
</html>