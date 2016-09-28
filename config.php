<?php

//Declara las variables para la conexión a la base de datos
$host = "localhost";
$basededatos = "tt";
$usuariodb = "Admin";
$clavedb = "root";

//declara las variables para usar cualquier tabla o catalogo de la base de datos. 
//falta del vestible.
$table_persona = "Persona_tb";
$table_direccion = "Direccion_tb";
$table_usuario = "Usuario_tb";
$table_especialista = "Especialista_tb";
$table_administrador = "Administrador_tb";
$table_tratamiento = "Tratamiento_tb";
$table_vestible = "Vestible_tb";
$table_paciente = "Paciente_tb";
$table_historiaclinica = "HistoriaClinica_tb";
$table_bitacora = "Bitacora_tb";
$catalog_unidades = "Unidades_cat";
$catalog_medicamento = "Medicamento_cat";
$catalog_presentacion = "Presentacionmedic_cat";
$catalog_marca = "Marca_cat";
$catalog_viadeadmon = "ViaAdministracion_cat";

//Evita que desplegue el error
 error_reporting(0);

 //Realiza la conexión 
$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

//comprueba si hubo  error en la conexión y despliega el mensaje.
if($conexion->connect_errno){
	echo "Disculpe las molestias, estamos experimentando fallos...";
	exit();
}