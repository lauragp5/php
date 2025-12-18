<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require"conexion.php";
    ?>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmp_telefono = $_POST["telefono"];
        $tmp_contrasena = $_POST["contrasena"];
        $tmp_cpostal = $_POST["cpostal"];
        $admin = isset($_POST["admin"]) ? 1 : 0;

        //valido el teléfono
        if(preg_match("/^\[6|7|9]d{8}/", $tmp_telefono)){
            $telefono = $tmp_telefono;
        }
        else{
            $err_telefono = "Número incorrecto, prueba otra vez";
        }
        //
    }

    /**
     * --> id_usuario
     * nombre
     * apellidos
     * email
     * contrasena
     * telefono
     * direccion
     * codigo_postal
     * ciudad
     * admin
     * --> fecha 
     */
    ?>
    
    <div class ="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form action="" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="contrasena" class="form-control">
                        <?php 
                        if(isset($err_contrasena)) echo "<div class = 'alert alert-danger'>$err_contrasena</div>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control">
                        <?php 
                        if(isset($err_telefono)) echo "<div class = 'alert alert-danger'>$err_telefono</div>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Código Postal</label>
                        <input type="text" name="cpostal" class="form-control">
                        <?php 
                        if(isset($err_cpostal)) echo "<div class = 'alert alert-danger'>$err_cpostal</div>";
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