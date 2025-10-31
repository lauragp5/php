<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobuses</title>
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
            }
            th{
                border: 1px solid black;
            }
        </style>
    <?php
        $lineas = [
            ["Málaga", "Ronda", 120, 12],
            ["Churriana", "Málaga", 20, 3],
            ["Málaga", "Granada", 120, 10],
            ["Torrole", "Málaga", 10, 2.5]
        ];

        //Ej.1 Añadir dos líneas de autobús
        $lineas[] = ["Sevilla", "Málaga", 120, 5];
        $lineas[]= ["Cadiz","Sevilla", 90, 3];

        //Ej2 Ordenar el array de mayor a menor duración
        $_duracion = array_column($lineas, 2);
        array_multisort(
            $_duracion, SORT_DESC,
            $lineas
        );

        //Ej3 Mostrar las líneas en una tabla
        ?>
        <table>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
            <?php foreach($lineas as $linea){
                echo "<tr>";
                    foreach ($linea as $elemento) {
                        echo "<td> $elemento </td>";
                    }
                    echo "</tr>";
            }
            ?>
        </table>

</body>
</html>