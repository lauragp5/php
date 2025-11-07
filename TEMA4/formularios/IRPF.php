<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IRPF</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>

    <form action="" method= "POST">
        <label for="num1">Sueldo: </label>
        <input type="text" name="num1"><br>
        <input type="submit" value="OK"><br>
    </form>
    
    <table>
        <tr>
            <th>Salario Bruto</th>
            <th>Salario Neto</th>
            <th>Impuesto</th>
            <th>Tramos</th>
        </tr>
        
    </table>
    
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sueldo = $_POST["num1"];
        $sueldo = floatval($sueldo);

        echo(calcularIRPF($sueldo));
    }

    function calcularIRPF($sueldo){
        $tramos = [
            [0, 12450, 0.19],
            [12451, 20200, 0.24],
            [20201, 35200, 0.30],
            [35201, 60000, 0.37],
            [60001, 300000, 0.45],
            [300000, INF, 0.47]
        ];

        $booleano = false;
        $contador = 0;
        $deduccion = 0;
        while(!$booleano){
            if(min($sueldo, $tramos[$contador][1]) != $sueldo){
                $deduccion += ($tramos[$contador][1] - $tramos[$contador][0]) * $tramos[$contador][2];
                $contador++;
            }
            else{
                $deduccion += ($sueldo - $tramos[$contador][0]) * $tramos[$contador][2];+
                $booleano = true;
            }
        }

        $neto = $sueldo - $deduccion;
    }
    ?>
</body>
</html>