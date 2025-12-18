<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require"conexion.php";
    ?>
</head>
<body>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmp_usuario = $_POST["usuario"];
        $tmp_contrasena = $_POST["contrasena"];


        if($tmp_usuario == ""){
            $err_usuario = "Inserta un usuario";
        }else{
            $usuario = $tmp_usuario;
        }

        //validación de la contrasena

        if($tmp_contrasena == ""){
            $err_contrasena = "Inserta una contraseña";
        }else{
            $contrasena = $tmp_contrasena;
        }
        if(isset($usuario) && isset($contrasena)){
            $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
            $resultado = $_conexion->query($consulta);

            if($resultado ->num_rows === 0){
                echo "<div class='alert alert-danger'>El usuario no existe en la base de datos </div>";
            }else{
                $info_usuario = $resultado->fetch_assoc();

                echo "Contraseña indicada: " . $contrasena;
                echo "<br>Hash almacenado: " . $info_usuario["contrasena"];
                $verificacion_contrasena = password_verify($contrasena, $info_usuario["contrasena"]);

                if(!$verificacion_contrasena){
                    echo "<div class='alert alert-danger'> La contraseña no coincide </div>";
                    /**
                     * ¿Qué hace session_start()
                     * inicia una nueva sesión o recupera una antigua crea/lee una cookie llamada PHPSESSID en el navegador del usuario
                     * 
                     * carga los datos de la sesión desde el servidor en el array $_SESSION
                     * 
                     * este session_start() lo usaremos al inicio de cada página que necesite acceder a datos de sesión
                     * Llamaremos a la función aantes de enviar cualquier salida HTML (antes del DOCTYPE)
                     * 
                     * Qué es $_SESSION
                     * 
                     * Un array asociativo que guarda datos en el servidor, es persistente (constante) entre diferentes ficheros mientras la sesión esté activa 
                     */

                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["contrasena"] = $info_usuario["contrasena"];

                    header("location: ../index.php");
                    exit();
                    /**
                     * Que es heeader 
                     * 
                     * Cuando tu navegador pide ina pagina el servidor responde
                     * algo asi HTTP/1.1 200 OK 
                     * Content-tyoe: text/html ; charset = UTF-8.....
                     * <html></html>
                     * 
                     */






                }
            }
        }
        
    }
    ?>

    <div class ="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form action="" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control">
                        <?php 
                        if(isset($err_usuario)) echo "<div class = 'alert alert-danger'>$err_usuario</div>";
                        ?>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="contrasena" class="form-control">
                        <?php 
                        if(isset($err_contrasena)) echo "<div class = 'alert alert-danger'>$err_contrasena</div>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-check-label">¿Eres admin?</label>
                        <input type="checkbox" name="admin" class="form-check-input">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Registrarse" class="btn btn-primary w-100">
                    </div>

                    <h3 class="text-center mt-4 mb-3">Si ya tienes cuenta, inicia sesión</h3>
                    <a href="login.php" class="btn btn-secondary w-100"> Iniciar sesión</a>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>