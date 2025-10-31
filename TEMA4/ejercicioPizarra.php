<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
    <!-- Ejercicio 1: media anual sueldos-->
    <!-- Debería estar hecho como el 2, con un for-->

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
     $variable;
     $tInf = 0;
     $tEle = 0;
     $tRob = 0;
     $totalMedia = 0;
     ?>
     <table>
        <tr>
            <th>Departamento</th>
            <th>1er</th>
            <th>2do</th>
            <th>3er</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Informática</td>

            <td><?php $variable = rand(15000, 20000);
            $tInf += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tInf += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tInf += $variable;
            echo($variable); ?></td>

            <td><?php echo($tInf)?></td>

        </tr>
        <tr>
            <td>Electrónica</td>

            <td><?php $variable = rand(15000, 20000);
            $tEle += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tEle += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tEle += $variable;
            echo($variable); ?></td>

            <td><?php echo($tEle)?></td>

        </tr>
        <tr>    
            <td>Robótica</td>

            <td><?php $variable = rand(15000, 20000);
            $tRob += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tRob += $variable;
            echo($variable); ?></td>

            <td><?php $variable = rand(15000, 20000);
            $tRob += $variable;
            echo($variable); ?></td>

            <td><?php echo($tRob)?></td>
        </tr>

        <tr>
            <td colspan="5"> Media anual: <?php echo(round(($tInf + $tEle + $tRob)/3))?></td>
        </tr>    
     </table>
</body>
</html>