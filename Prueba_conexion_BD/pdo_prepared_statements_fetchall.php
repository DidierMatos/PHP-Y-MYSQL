<?php
#PDO utiliza Fetch y FetchAll que se explican aqui

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', ''); //nos permite conectar la base de datos




	#PDO CON PREPARED STATEMENTS

	$statement = $conexion->prepare('SELECT * FROM usuarios'); /*se prepara la consulta con placeholder que es un valor temporal para identificar. NOTA: Se puede agregar otra placeholder poniendo or nombre = :nombre.
	se pueden hacer consultas e insertar valores y ejecutarlo con Execute solamente*/
	$statement->execute(array(':id' => $id, ':id2' => 5)); //se ejecuta la consulta y mediante un arreglo el placeholder se sustituye por $id. NOTA: Se puede agregar otra placeholder poniendo , ':nombre' => 'Adriel'
		

	$resultados = $statement->fetchAll(); //traduce el statement y lo almacena en una variable para poder imprimir. FETCH solo devuelve 1.
	foreach($resultados as $usuario){ //ya traducido se ingresa mediante un ciclo para imprimir cada nombre de usuario
		echo $usuario['nombre'] . '<br/>';
	}



}catch(PDOExeception $e){ // ejecuta el mensaje en caso de no conectarse con la BD
	echo 'error: '. $e->getMessage();
}

?>