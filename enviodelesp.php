<?php
//Lee las variables de valor y alarma de la URL de esta pagina
//https:aquinombredelapaginaweb.com/enviodelesp.php?valor=xxx.xx&alarma=x
$lat_str = $_REQUEST['latitud'];
$lng_str = $_REQUEST['longitud'];
$date_str = $_REQUEST['fecha'];
$time_str= $_REQUEST['hora'];


//crea si no lo hay o abre un archivo de texto llamado "variables.txt"
$file = fopen("variables.txt", "w");
fwrite($file, $valor . PHP_EOL); //escribe en la primera linea del archivo $valor
fwrite($file, $alarma . PHP_EOL); //escribe en la segunda linea $alarma
fclose($file);
?>
