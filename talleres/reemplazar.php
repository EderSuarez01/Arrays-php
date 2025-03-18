<?php 

$colores = array ("amarrillo","rojo","azul","verde");

$colores[] = "morado";
print_r (value: $colores);

$colores[1] = "naranja";
print_r (value: $colores);

$coloresSeleccionados = array_slice(array: $colores, offset: 1, length: 2);
print_r(value: $coloresSeleccionados);

?>

