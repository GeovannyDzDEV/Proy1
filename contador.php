<?php
$archivo = "contador.txt"; // Nombre del archivo donde se almacenará el contador
$f = fopen($archivo, "r"); // Abrir el archivo en modo lectura
$contador = fgets($f, 1000); // Leer el contenido del archivo
fclose($f); // Cerrar el archivo

$contador++; // Incrementar el contador en 1

$f = fopen($archivo, "w"); // Abrir el archivo en modo escritura
fwrite($f, $contador); // Escribir el nuevo valor del contador
fclose($f); // Cerrar el archivo

echo "Esta es la visita número " . $contador; // Mostrar el número de visitas
?>