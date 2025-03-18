<?php

$colores = array ("amarrillo","rojo","azul","verde");

$colores[]="negro";

print_r(value: $colores);

$eliminarColor = "rojo";
$llave = array_search(needle: $eliminarColor, haystack: $colores);

if($llave!==false) {

    unset($colores[$llave]);

}


print_r(value: $colores);

?>
