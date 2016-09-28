<?php

 //Archivo php que sirve para declarar las funciones de captura de datos en  los formularios.


 //Persona_tb

	function getNombre(){
 		return $_POST['txtNombre'];
	}

	function getApellidouno(){
 		return $_POST['txtApellidouno'];
 	}

	function getApellidodos(){
 		return $_POST['txtApellidodos'];
 	}

	function getSexo(){
 		return $_POST['radSexo'];
 	}

 	function getTelpersonal(){
 		return $_POST['txtTelpersonal'];
 	}

 	function getCorreo(){
 		return $_POST['txtCorreo'];
 	} 

//Direccion_tb

 	function getCalle(){
 		return $_POST['txtCalle'];
 	} 

 	function getNum(){
 		return $_POST['txtNum'];
 	} 

 	function getColonia(){
 		return $_POST['txtColonia'];
 	} 

 	function getCodpost(){
 		return $_POST['txtCodpost'];
 	} 

 	function getTelefono(){
 		return $_POST['txtTelefono'];
 	} 

//Especialista_tb

 	function getCedula(){
 		return $_POST['txtCedula'];
 	} 

 	function getEspecialidad(){
 		return $_POST['txtEspecialidad'];
 	} 

//Usuario_tb

 	function getContrasena(){
 		return $_POST['txtContrasena'];
 	} 

 	function getRecontrasena(){
 		return $_POST['txtRecontrasena'];
 	} 

/*//Historia Clínica

 	function getAlergia(){
 		return $_POST['txtAlergia'];
 	} 

 	function getAntecedentes(){
 		return $_POST['txtAntecedentes'];
 	}

 	function getCirugias(){
 		return $_POST['txtCirugias'];
 	}

 	function getNotas(){
 		return $_POST['txtNotas'];
 	}

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
 	} */
 
 