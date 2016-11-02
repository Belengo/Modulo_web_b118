<?php


	//Diagnóstico

 	function getMotivo(){
 		return $_POST['txtMotivoConsulta'];
 	} 

 	function getExploracion(){
 		return $_POST['txtExploracionNeuro'];
 	}

 	function getPadecimiento(){
 		return $_POST['txtPadecimiento'];
 	}

 	function getCrisiTipo(){
 		return $_POST['txtCrisisTipo'];
 	}

 	function getNotasDiagnostico(){
 		return $_POST['txtNotasDiagnostico'];
 	}

 	?>