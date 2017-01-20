<?php

$texto='Hola Didier <b/>';
//echo htmlspecialchars($texto); # no permite que el usuario inyecte código conviertiendo carácteres especiales en entidades HTML.
//echo trim($texto); # Permite que el texto se imprima sin espacios
// echo strlen($texto); # Permite conocer todos los carácteres de texto incluyendo los espacios en blanco
// echo substr($texto, 1,2); # imprime solamente los carácteres que nosotros queramos.
// echo strtoupper($texto); #Convierte en mayúsculas
// echo strtolower($texto); # Convierte en minúsculas
echo strpos($texto,'o'); # Ubica la posición de una letra en específica
?>