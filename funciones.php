<?php

/*int; es de tipo entero, solo funciona dentro de la funcion  */
function calcularDescuento( int $original, float $descuento){
    $resultado = $original - ($original *($descuento/100));
    return $resultado;
}

$total = calcularDescuento(100,10);
echo "el resultado es: \n".$total;
/* $resultado = $original - ($original *($descuento/100)) */
?>