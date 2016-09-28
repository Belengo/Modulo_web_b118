<?php
//Archivo php que sirve para declarar las funciones de captura de datos en Persona_tb.

//Tratamiento_tb_has_medicamento_cat

 	function getAlergia(){
 		return $_POST['txtAlergia'];
 	} 

 	function getDosis(){
 		return $_POST['txtDosis'];
 	}

 	function getDuracion(){
 		return $_POST['txtDuracion'];
 	}

 	function getPeriodo(){
 		return $_POST['txtPeriodo'];
 	}

 	function getIndicacion(){
 		return $_POST['txtIndicacion'];
 	}
 ?>	