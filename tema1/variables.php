<?php
$globalMal = "holi desde fuera";
function mostrarMal(){
    echo $globalMal;
}
mostrarMal();

$globalBien = "holi desde fuera";
function mostrarBien(){
    global $globalBien; //global busca de forma "global" la variable
    echo $globalBien ."<br>";
}
mostrarBien();

//static

function contador(){
    static $local = 10;
    $local++;
    echo $local ."<br>";
}

$a = 11;
$b = 12;
function suma($a, $b){
    return $a + $b;
}

//funcion con 2 numeros por argumento, que compare que sume uno al menor y reste uno al mayor

function igualar($num1, $num2){
    if($num1 < $num2){
        $num1++;
        $num2--;
    }elseif($num1 > $num2){
        $num1--;
        $num2++;
    }

    return "$num1 --- $num2";
}
?>