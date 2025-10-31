<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios DNI</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
?>
</head>
<body>

    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        } 
        td{
            border: 1px solid black;
            padding: 20px;
        }
        th{
            border: 1px solid black;
            padding: 20px;
        }
    </style>

    <?php 
    //Crear un array con una lista de personas donde la clave sea el dni y el valor el nombre
    //Debe haber 5 personas como mínimo. 
    $usuarios = [
	"53607891G" => "Rocío Pérez",
	"24596178V" => "Pedro Martín",
	"65027894K" => "Nuria García",
    "34650928Y" => "Jorge Moreno",
    "21347698Q" => "Ana Fernández"
    ]; 

    
    //Mostrar el array completo con print_r, a alguna persona de manera individual y después mostrar el array dentro de una lista no ordenada con sus claves.
    print_r($usuarios); 
    ?>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
        </tr>
        <?php 
        foreach($usuarios as $current => $contenido){
        ?>
            <tr>
            <td><?php echo $current ?></td>
            <td><?php echo $contenido ?></td>
            </tr>

        <?php }
        ?>
    </table>
    <?php
        //Añadir elementos con y sin clave.
        $usuarios["54769323R"] = "Lourdes Baez";
        $usuarios[] = "Francisco López";

        //Borrar algún elemento.
        unset($personas[0]);

        //Probar a resetear claves.
        $usuarios = array_values($usuarios);
    ?>

    


 
</body>
</html>