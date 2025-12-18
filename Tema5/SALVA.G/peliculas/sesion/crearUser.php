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
        $admin = isset($_POST["ADMIN"]) ? 1 : 0;

        //validación de usuario
        $tmp_usuario = htmlspecialchars($tmp_usuario);
        $tmp_usuario = trim($tmp_usuario);
        $tmp_usuario = preg_replace("/\s+/", "_", $tmp_usuario);

        if($tmp_usuario == ""){
            $err_usuario = "Inserta un usuario";
        }else if(strlen($tmp_usuario) < 3){
            $err_usuario = "El usuario tiene que tener al menos 3 caracteres";
        }else{
            $usuario = $tmp_usuario;
        }

        //validación de la contrasena
        $tmp_contrasena = htmlspecialchars($tmp_contrasena);
        $tmp_contrasena = trim($tmp_contrasena);

        if($tmp_contrasena == ""){
            $err_contrasena = "Inserta una contraseña";
        }else if(strlen($tmp_contrasena) < 3){
            $err_contrasena = "La contraseña tiene que tener al menos 3 caracteres";
        }else{
            $contrasena = $tmp_contrasena;
        }

        ////////

        if(isset($contrasena) && isset($usuario)){
            $constrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
            $consulta = "INSERT INTO usuarios (usuario, contrasena, admin) VALUES ('$usuario', '$contrasena_cifrada', '$admin')";
            $resultado = $_conexion->query($consulta); //devuelve un booleano true si se puede insertar en la tabla y false si no
            if($resultado){
                echo "<div class = 'alert alert-success'>Usuario registrado correctamente </div";
            }else{
                echo "<div class = 'alert alert-danger'>No se ha podido registrar el usuario</div";
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