<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Arrays</title>
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
        $videojuegos = [
            ["FIFA 26", "Deportes", 90],
            ["Hollow Knight", "Plataformas", 30],
            ["Dark Souls II", "Soulslike", 40],
            ["Silksong", "Plataformas", 20],
            ["Super Mario Bros", "Plataformas", 80]

        ];
        $_nombre = array_column($videojuegos, 0);
    ?>
    <ol>
        <?php
        $_categoria = array_column($videojuegos, 1);
        $_precio = array_column($videojuegos, 2);
        
        array_multisort(
            $_categoria, SORT_ASC,
            $_precio, SORT_DESC, 
            $videojuegos);

        for ($i=0; $i < count($_nombre); $i++) { 
            echo "<li> $_nombre[$i]</li>";
        }
        ?>
    </ol>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Categoria</td>
            <td>Precio</td>
        </tr>
        <?php
        foreach($videojuegos as $juegos){
            echo "<tr>";
            foreach($juegos as $value){
                echo "<td> $value </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <br>
    <table>
        <?php
            /* Ordenar por el precio de más barato a más caro */
            $_precio = array_column($videojuegos, 2);
            array_multisort(
                $_precio, SORT_ASC,
                $videojuegos
            );?>
            <tr>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Precio</td>
            </tr>
            <?php
            foreach($videojuegos as $juegos){
            echo "<tr>";
            foreach($juegos as $value){
                echo "<td> $value </td>";
            }
            echo "</tr>";
            }
        
        ?>
    </table>
    <br>
    <br>
    <table>
        <?php
            /* Ordenar por categoría en orden alfabético inverso */
            $_categoria = array_column($videojuegos, 1);
            array_multisort(
                $_categoria, SORT_DESC,
                $videojuegos
            );
            ?>
            <tr>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Precio</td>
            </tr>
            <?php
            foreach($videojuegos as $juegos){
            echo "<tr>";
            foreach($juegos as $value){
                echo "<td> $value </td>";
            }
            echo "</tr>";
            }
        
        ?>
    </table>

    <br>
    <br>
    <table>
        <?php
            /* Ordenar por categoría en orden alfabético y si son iguales por precio descendente */
            $_categoria = array_column($videojuegos, 1);
            $_precio = array_column($videojuegos, 2);
            array_multisort(
                $_categoria, SORT_ASC,
                $_precio, SORT_DESC,
                $videojuegos
            );
            ?>
            <tr>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Precio</td>
            </tr>
            <?php
            foreach($videojuegos as $juegos){
            echo "<tr>";
            foreach($juegos as $value){
                echo "<td> $value </td>";
            }
            echo "</tr>";
            }
        
        ?>
    </table>

    <br>
    <br>
</body>
</html>