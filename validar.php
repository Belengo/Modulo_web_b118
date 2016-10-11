<?php
//session_start();


include("config.php");

if(isset($_POST["btnAceptar"])){
	
	$user = $_POST['txtUsuario'];
	$pssw = $_POST['txtPass'];

	$nombre_completo = "SELECT CONCAT(nombre_col,'',apellidouno_col,' ', apellidodos_col) FROM Persona_tb where correo_col = '$user'";
		$conexion->query($nombre_completo);
		//echo "<script type=\"text/javascript\">alert(\"$nombre_completo\");</script>";

	$id_pers = "SELECT id_persona FROM Persona_tb WHERE correo_col = '$user'";
	$res_id_pers = $conexion->query($id_pers);
	//echo "<script type=\"text/javascript\">alert(\"$id_pers\");</script>";

	$password = "SELECT pssw_col FROM Usuario_tb WHERE id_usuario = ($id_pers)";
		$res_pssw = $conexion->query($password);
	//echo "<script type=\"text/javascript\">alert(\"$password\");</script>";
		$row_p = $res_pssw->fetch_array(MYSQLI_ASSOC);
		$row_pass = $row_p["pssw_col"];

		if ($row_pass == $pssw) {
			# code...
			//$num_row = $res_pssw->num_rows;
			//if( $num_row > 0 ) {
			echo "<script type=\"text/javascript\">alert(\"Bienvenido a Chibil\");</script>";
			echo "<script language=Javascript> location.href=\"Bienvenido.php\"; </script>";
			//}  
		} else {
			echo "<script type=\"text/javascript\">alert(\"USUARIO O CONTRASEÑA INCORRECTO\");</script>";
			echo "<script language=Javascript> location.href=\"index.php\"; </script>";
		}
		


} //if isset

?>