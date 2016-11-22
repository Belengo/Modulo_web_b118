<?php
session_start();
include('config.php'); 
			
$lineas = file('$nombre_archivo');
			
foreach ($lineas as $linea_num => $linea)
{
	$datos = explode("\t",$linea);

	$clave = trim($datos[0]);
	$producto = trim($datos[1]);
	$precio = trim($datos[2]);

    $consulta = "INSERT INTO tblproducto(clave,producto,precio) VALUES('$clave','$producto',$precio)";
	$conexion->query($consulta);
}

?>