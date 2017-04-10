<?php

#VARIABLES GLOBALES. SI QUEREMOS QUE DENTRO DE UNA FUNCION RECONOZCA UNA VARIABLE QUE ESTE AFUERA NECESITAMOS PASARLO COMO PARAMETRO DE LA FUNCION Y DE LA IMPRESION.

// $numero = 7; //variable que esta por fuera de la funcion

// function mostrarNumero($numero){
// 	echo $numero; // para que la funcion pueda utilizarlo se necesita pasarlo en sus parametros
// }


// mostrarNumero($numero); // se imprime la funcion

#MANERA INVERSA. SI LA VARIABLE ESTA DENTRO DE LA FUNCION NO PODEMOS ACCEDER AFUERA DE ESTA Y PARA ELLO SE NECESITA PONER RETURN.


function mostrarNumero(){
	$numero = 10; //variable dentro de una funcion
	return $numero; // se grega el return para sacar variables y que sean reconocidas afuera
}

echo mostrarNumero();//se imprime la funcion



?>