<?php

//Declara las variables para la conexión a la base de datos
$host = "localhost";
$basededatos = "B118";
$usuariodb = "Admin";
$clavedb = "root";

//declara las variables para usar cualquier tabla o catalogo de la base de datos. 
//falta del vestible.
//Persona -usuario
$table_persona = "Persona_tb";
$table_direccion = "Direccion_tb";
$table_usuario = "Usuario_tb";
$table_especialista = "Especialista_tb";
$table_administrador = "Administrador_tb";
$table_paciente = "Paciente_tb";


$table_tratamiento = "Tratamiento_tb";





$table_receta = "Tratamiento_tb_has_Medicamento_cat";

//vestible
$table_vestible = "Vestible_tb";
$table_bitacora = "Bitacora_tb";
$table_sensorFrecuencia = "SensorFrecuencia_tb";
$table_sensorTemperatura = "SensorTemperatura_tb";


//Medicamento
$catalog_medicamento = "Medicamento_cat";
$catalogo_nombremedicamento = "Nombremedicamento_cat";
$catalogo_laboratorio = "Laboratorio_cat";
$catalgono_sustanciaActiva = "SustanciaActiva_cat";
$catalgono_formaFarmaceutica = "Formafarmaceutica_cat";
$catalogo_presentacion = "Presentacionmedic_cat";
	//presentacionmedic
	$catalogo_empaque = "Empaque_cat";
	$catalogo_cantidad = "Cantidad_cat";
	$catalogo_presentacion = "Presentacion_cat";
	$catalogo_unidades = "Unidades_cat";

	

//Historia Clínica
$table_historiaclinica = "HistoriaClinica_tb";
$table_diagnostico = "Diagnóstico_tb";
$table_antecedentesHeredo = "AntecedentesHeredoFam_tb";
$table_antecedentesPatologicos = "AntecedentesPatologicos_tb";
$table_antecedentesNopatologicos = "AntecedentesNoPatologicos_tb";
$table_alergias = "Alergias_tb";
$table_alergias_antiepilepticos = "Alergias_tb_has_SustanciaActiva_cat";



//Evita que desplegue el error
 error_reporting(0);

 //Realiza la conexión 
$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

//comprueba si hubo  error en la conexión y despliega el mensaje.
if($conexion->connect_errno){
	echo "Disculpe las molestias, estamos experimentando fallos...";
	exit();
}