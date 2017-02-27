<?php

$conexion = mysql_connect('localhost', 'root', '') or die ('No se pudo conectar a la bd'); //guarda la conexion con la direccion de host usuario y contraseña en una variable. En caso de fallar no permite accesar.

mysql_select_db('prueba_datos.sql', $conexion); //agrega el nombre de la base de datos junto a la variable de conexion

mysql_query('select * from usuarios'); //permite hacer consultas


$fila = mysql_fetch_object($resultados); //traduce los resultados y lo guarda en una variable

echo fila->nombre;

?>





