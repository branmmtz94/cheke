<?php
//Refresca la pagina cada 5s
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
<html>
<head>
<title> valor del ADC del ESP</title>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<body style="background-color:#A2D9CE;">
<div align=center> <img src="logoiiietranspeque.png" align="absmiddle"></img> 
<b><FONT SIZE=6>Lectura de valor en ADC del ESP-12</FONT></b>
</div>
<br>
<br>
<br>
<div align=center><FONT SIZE=4>
<?php
$nombre_archivo = "variables.txt";
//primero verifica si enviodelesp.php creo ya el archivo variables.txt con
//el valor del ADC y la alarma
if (file_exists($nombre_archivo)) {
    //Si el archivo existe, lo abre y lee cada linea
    $archivo= fopen("variables.txt","r"); 
    $lat_str = fgets($archivo); //toma la primera linea que es la del valor
    $lng_str = fgets($archivo);
    $date_str = fgets($archivo);
    $time_str = fgets($archivo);//toma la segunda linea que es la de la alarma

}
// Muestra en pantalla el valor que envia el ESP o un mensaje de aviso 
//si no se ha recibido nada aun.
echo "El valor en el ADC es:" ;
echo "<br>";
echo  "<b>$lat_str</b>"; 
echo "<br>"; 
echo "<br>"; 
      
      echo "El valor en el ADC es:" ;
echo "<br>";
echo  "<b>$lng_str</b>"; 
echo "<br>"; 
echo "<br>"; 
      
      echo "El valor en el ADC es:" ;
echo "<br>";
echo  "<b>$date_str</b>"; 
echo "<br>"; 
echo "<br>"; 
      
      echo "El valor en el ADC es:" ;
echo "<br>";
echo  "<b>$time_str</b>"; 
echo "<br>"; 
echo "<br>"; 
//si se recibe que alarma es 1 es que se ha sobrepasado el valor permitido

   } 
?>
</div>
</FONT>
</html>