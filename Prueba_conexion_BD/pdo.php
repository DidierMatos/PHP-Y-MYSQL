<?php
#La ventaja de PDO es que te permite cambiar diferentes tipos debase de datos y es la nueva manera de hacer la conexion 


try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', ''); //nos permite conectar la base de datos
	// echo 'Conexion OK';

	$resultados = $conexion->query('select * from usuarios'); // nos permite hacer consultas mediante un query, ademas de insertar datos pero existe otra forma ya que el metodo QUERY es vulnerable a la inyeccion de codigo cuando utilizes variables dentro de una consulta

	foreach ($resultados as $fila) { //imprimimos los valores de la base de datos mediante un ciclo utilizando la consulta hecha anteriormente
		// print_r($fila); este codigo nos permite imprimir los resultados pero lo hace con arreglos
		echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br>';	//esta instruccion ayuda a imprimir de manera sencilla y mas entendible
}

}catch(PDOExeception $e){ // ejecuta el mensaje en caso de no conectarse con la BD
	echo 'error: '. $e->getMessage();
}

?>