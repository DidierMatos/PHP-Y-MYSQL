<?php

#LUGAR DONDE SE CREAN LAS FUNCIONALIDADES Y DONDE SE LLAMA LA VISTA POR MEDIO DE INCLUDE O REQUIRE

function suma($numero, $numero2) {
	return $numero + $numero2;
}

// include 'vista_index_view.php'; // INCLUDE imprime todo el resto de la pagina despues de donde se ubique el error.
// //se usa cuando el archivo no sea muy importante (vistas)

// require 'vista_index_view.php'; // REQUIRE NO IMPRIME el resto de la pagina que se encuentre debajo del error del codigo.
// //Se crea en archivos importantes como la conexion BD etc. 

require_once 'vista_index_view.php'; // REQUIRE_ONCE permite imprimir una sola vez esta linea de codigo al igual que INCLUDE_ONCE, aunque dupliquemos la linea de codigo solo lo hara una vez


?>