<?php

//arreglo indexado es por numeros anteriormente dado
#A DIFERENCIA DE ESTE ARREGLO PODEMOS CAMBIAR ATRIBUTOS DE LAS VARIABLES E IMPRIMIRLOS 
$alex = array('telefono' => '9832434', 'edad' => 25, 'apellido' => 'Perez', 'pais' => 'mexico');
$alex['telefono'] = '9842342';
echo 'el telefono de alex es: '. $alex['telefono'] . '<br/>';

echo $alex['edad'] . '<br/>';
echo $alex['pais'] . '<br/>';

?>
