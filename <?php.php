<?php

$host = "localhost";
$basededatos = "tt";
$usuariodb = "Admin";
$clavedb = "root";

$table_persona = "Persona_tb";

 error_reporting(0);

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

if($conexion->connect_errno){
	echo "Nuestro sitio experimenta fallos...";
	exit();
}