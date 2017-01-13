<?php

//De esta manera creamos nuestras propias funciones agregandole atributos y nos sirve para optimizar codigo

function saludo($nombre) {
	echo 'Hola, '. $nombre . '<br/>';
}

saludo('Didier');
saludo('Adriel');
saludo('Keyli');

function sumar($numero1, $numero2){
	$resultado = $numero1 + $numero2;
	echo 'La suma total es: '. $resultado . '<br />';
}

sumar(2, 3);

echo '.................................................... <br/>';
// En esat función utilizamos el valor return que nos ayuda a mantener el valor y poder guardarlo en una variable sin mostrar nada en pantalla.

function restar($numero1, $numero2){
	$resultado = $numero1 - $numero2;
	//echo 'La resta es: '. $resultado . '<br />';
	return $resultado;
}

$resultado = restar(8, 5);


echo '....................................................<br/>';

//forma correcta de hacer la funcion de saludo, primero retornamos y si queremos luego imprimimos

function saludo2($nombre) {
	return 'Hola, '. $nombre . '<br/>';
}

echo saludo2('Didier');
echo saludo2('Adriel');
echo saludo2('Keyli');

?>