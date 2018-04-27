<?php

include ("../includes/listados.php");
//leerOrdenadoC1("../datos/ordenado.txt");
$datosFichero= generaAssocDesdeDesordenado("../datos/desordenado.txt");
//var_dump($datosFichero);

foreach ($datosFichero as $k => $v) {
    echo"<ul> $k :";
    foreach ($v as $v1)
        echo "<li>$v1</li>";
    echo "</ul>";
}

/*
 *
 *
 * include ("../includes/listados.php");
//leerOrdenadoC1("../datos/ordenado.txt");
//$array = generaAssocDesdeDesordenado("../datos/desordenado.txt");

$array = file("../datos/desordenado.txt");
//sort($array);
$toShow = [];

foreach ($array as $a){
    $aux = explode("#", $a);

    if(!isset($toShow[$aux[0]]))
        $toShow[$aux[0]] = [];

    array_push($toShow[$aux[0]], $aux[1]);
}



foreach ($toShow as $k => $v) {
    echo"<ul> $k :";
    foreach ($v as $v1)
        echo "<li>$v1</li>";
    echo "</ul>";
}
 *
 * */