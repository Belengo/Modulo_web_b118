<?php
session_start();
include("config.php");

if(isset($_POST["btnAceptar"])){
	
	$user = $_POST['txtUsuario'];
	$pssw = $_POST['txtPass'];

	$nombre_completo = "SELECT CONCAT(nombre_col,' ',apellidouno_col,' ',apellidodos_col) as 'Nombre_Completo' FROM Persona_tb where correo_col ='$user'";
	$res_nombre = $conexion->query($nombre_completo);
	$row_nombre = $res_nombre->fetch_array(MYSQLI_ASSOC);
	
	$id_pers = "SELECT id_persona FROM Persona_tb WHERE correo_col = '$user'";
	$res_id_pers = $conexion->query($id_pers);
	
	$password = "SELECT pssw_col FROM Usuario_tb WHERE id_usuario = ($id_pers)";
	$res_pssw = $conexion->query($password);
	$row_p = $res_pssw->fetch_array(MYSQLI_ASSOC);
	$row_pass = $row_p["pssw_col"];
	
	$row_idpersona = $res_id_pers->fetch_array(MYSQLI_ASSOC);
		
	//variable de sesion
	

	$Welcome = "Bienvenido a Chibil"; 
		if ($row_pass == $pssw) {
			# code...
			$_SESSION['userid'] = $row_idpersona['id_persona'];
			$_SESSION['user'] = $row_nombre['Nombre_Completo'];
			echo "<script type=\"text/javascript\"> alert(\"$Welcome\");</script>";
			echo "<script language=Javascript> location.href=\"Bienvenido.php\"; </script>";
			//}  
		} else {
			echo "<script type=\"text/javascript\">alert(\"USUARIO O CONTRASEÑA INCORRECTO\");</script>";
			echo "<script language=Javascript> location.href=\"index.php\"; </script>";
		}
		


} //if isset

?>