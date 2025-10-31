<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas notas</title>
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
        $alumnos = [
            "Paco" => ["Servidor" => 7,
                        "Ingles" => 10,
                        "IPE II" => 5,
                        "Despliegues" => 2,
                        "Diseño" => 5,
                        "Cliente" => 6,
                        "Entorno Servidor" => 8,
                        "Proyecto" => 10
            ],
            "Maria" => ["Servidor" => 10,
                        "Ingles" => 10,
                        "IPE II" => 10,
                        "Despliegues" => 10,
                        "Diseño" => 10,
                        "Cliente" => 10,
                        "Entorno Servidor" => 10,
                        "Proyecto" => 10
        ],
            "Alvaro" => ["Servidor" => 9,
                        "Ingles" => 9,
                        "IPE II" => 9,
                        "Despliegues" => 9,
                        "Diseño" => 9,
                        "Cliente" => 9,
                        "Entorno Servidor" => 9,
                        "Proyecto" => 9
        ],
            "Alejandro" => ["Servidor" => 6,
                        "Ingles" => 7,
                        "IPE II" => 8,
                        "Despliegues" => 6,
                        "Diseño" => 5,
                        "Cliente" => 8,
                        "Entorno Servidor" => 7,
                        "Proyecto" => 7
        ]
        ];
    ?>
    <table>
        <tr>
            <th>Alumno</th>
            <th>Asignatura</th>
            <th>Nota</th>
            <th>Nota String</th>
        </tr>
        <?php
            foreach($alumnos as $nombre => $alumno){
                $primera = true;
                foreach ($alumno as $asignatura => $nota) {?>
                <?php
                    $notaS = "";
                    $color = "";
 
                    [$notaS, $color] = match (true) {
                        $nota < 5 => ["Suspenso", "#FF746C"],
                        $nota < 7 => ["Bien","#ffc067"],
                        $nota < 9 => ["Notable", "#bdecb6"],
                        default => ["Sobresaliente", "#b3ebf2"]
                    };
                    if($primera){ ?>
                        <tr>
                            <td rowspan="<?php echo count($alumno) ?>"><?php echo $nombre ?> </td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $asignatura ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $nota ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $notaS ?></td>
                            

                            
                        </tr>
                        <?php $primera = false; 
                    }
                    else{ ?>
                        <tr>
                            <td bgcolor="<?php echo $color ?>"><?php echo $asignatura ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $nota ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $notaS ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    

                    
            <?php  
            }
        } 
        ?>
    </table>

    <!--Ej1 Ordenar alfabéticamente por nombre-->
    <?php ksort($alumnos) ?>

    <!--Ej2 Ordenar la tabla por el nomvre de alumno inverso y dentro de cada alumno, ordenar las notas de más baja a más alta-->
    <?php ksort($alumnos);
        foreach ($alumnos as $nombre => $value) {
                asort($alumnos[$nombre]);
        }?>

    <table>
        <tr>
            <th>Alumno</th>
            <th>Asignatura</th>
            <th>Nota</th>
            <th>Nota String</th>
        </tr>
        <?php
            foreach($alumnos as $nombre => $alumno){
                $primera = true;
                foreach ($alumno as $asignatura => $nota) {?>
                <?php
                    $notaS = "";
                    $color = "";
 
                    [$notaS, $color] = match (true) {
                        $nota < 5 => ["Suspenso", "#FF746C"],
                        $nota < 7 => ["Bien","#ffc067"],
                        $nota < 9 => ["Notable", "#bdecb6"],
                        default => ["Sobresaliente", "#b3ebf2"]
                    };
                    if($primera){ ?>
                        <tr>
                            <td rowspan="<?php echo count($alumno) ?>"><?php echo $nombre ?> </td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $asignatura ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $nota ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $notaS ?></td>
                            

                            
                        </tr>
                        <?php $primera = false; 
                    }
                    else{ ?>
                        <tr>
                            <td bgcolor="<?php echo $color ?>"><?php echo $asignatura ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $nota ?></td>
                            <td bgcolor="<?php echo $color ?>"><?php echo $notaS ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    

                    
            <?php  
            }
        } 
        ?>
    </table>

</body>
</html>