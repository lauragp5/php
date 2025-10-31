<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio alumnos</title>
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
    //array asociativo $alumnos con nombre(clave) y su nota del 1 al 10 (8 alumnos)
    $alumnos = [
        "Lucía" => 9,
        "Álvaro" => 9,
        "Salva" => 4,
        "Alejandro" => 7,
        "María" => 10,
        "Susana" => 5,
        "Carlos" => 8,
        "Ismael" => 3
    ]
    //hacer una tabla con el array
        ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
        </tr>
        <?php 
        foreach($alumnos as $alumno => $nota){
        ?>
            <tr>
            <td><?php echo $alumno ?></td>
            <td><?php echo $nota ?></td>
            </tr>

        <?php }
        ?>
    </table>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Nota String</th>
        </tr>
        <?php 
        foreach($alumnos as $alumno => $nota){
            $notaS = "";
            match (true) {
                $nota < 5 => $notaS = "Suspenso",
                $nota < 7 => $notaS = "Bien",
                $nota < 9 => $notaS = "Notable",
                default => $notaS = "Sobresaliente"
            }
        ?>
            <tr>
            <td><?php echo $alumno ?></td>
            <td><?php echo $nota ?></td>
            <td><?php echo $notaS ?></td>

            </tr>

        <?php }
        ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Nota String</th>
        </tr>
        <?php 
        foreach($alumnos as $alumno => $nota){
            $notaS = "";
            $color = "";
            match (true) {
                $nota < 5 => $notaS = "Suspenso",
                $nota < 7 => $notaS = "Bien",
                $nota < 9 => $notaS = "Notable",
                default => $notaS = "Sobresaliente"
            };
            switch(true){
                case $nota < 5: 
                    $notaS = "Suspenso";
                    $color = "#FF746C";
                    break;
                case $nota < 7:
                    $notaS = "Bien";
                    $color = "#ffc067";
                    break;
                case $nota < 9:
                    $notaS = "Notable";
                    $color = "#bdecb6";
                    break;
                default:
                    $notaS = "Sobresaliente";
                    $color = "#b3ebf2";
            }

            /*otra forma de hacer el switch

            */
        ?>
            <tr bgcolor= <?php echo $color ?>>
            <td><?php echo $alumno ?></td>
            <td><?php echo $nota ?></td>
            <td><?php echo $notaS ?></td>

            </tr>

        <?php }
        ?>
    </table>
</body>
</html>