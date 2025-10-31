<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Notas</title>
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
    $tam = rand(15, 25);
    $nota;
    $suma;
    $cont = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th>Alumnos</th>
                <th>Notas</th>
            </tr>
        </thead>

        <tbody>
            <?php
                for ($i=0; $i < $tam; $i++) { 
                    ?> <tr><td> Alumno <?php echo($i); ?> </td>
                    <td><?php 
                    $nota = rand(1, 20);
                    switch(true){
                        case $nota < 5:
                            $suma += $nota;
                            $cont++;
                            echo ("$nota (suspenso)");
                            break;

                       case $nota < 7:
                            $suma += $nota;
                            $cont++;
                            echo ("$nota (bien)");
                            break;

                        case $nota < 9:
                            $suma += $nota;
                            $cont++;
                            echo ("$nota (notable)");
                            break;

                        case $nota <= 10:
                            $suma += $nota;
                            $cont++;
                            echo ("$nota (sobresaliente)");
                            break;
                        default:
                            $nota = "Nota no válida";
                            echo($nota);
                            break;
                    }
                    ?> 
                </td> <?php
                }
                ?>
                
            ?>
        </tbody>
        <tfoot>
            <tr><th colspan ="2">Media:  <?php echo(round($suma/$cont)); ?></th></tr>
        </tfoot>
    </table>
</body>
</html>