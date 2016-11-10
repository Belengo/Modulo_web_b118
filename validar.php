<?php
  session_start();
 
 
  include("config.php");
  include("mensajes.php");
  
  if(isset($_POST["btnAceptar"])){
  	
  	$user = $_POST['txtUsuario'];
  	$pssw = $_POST['txtPass'];
  
 	$nombre_completo = "SELECT CONCAT(nombre_col,' ',apellidouno_col,' ',apellidodos_col) as 'Nombre_Completo', id_persona FROM Persona_tb where correo_col ='$user'";
	$res_nombre = $conexion->query($nombre_completo);
 	$row_nombre = $res_nombre->fetch_array(MYSQLI_ASSOC);
 	$id_pers = $row_nombre['id_persona'];
 
 
 	
  	$password = "SELECT pssw_col, usrtipo_col FROM Usuario_tb WHERE id_usuario = ($id_pers)";
 		$res_pssw = $conexion->query($password);
 	
 		$row_p = $res_pssw->fetch_array(MYSQLI_ASSOC);
 		$row_pass = $row_p["pssw_col"];
 	  $res_pssw = $conexion->query($password);
 	  $row_p = $res_pssw->fetch_array(MYSQLI_ASSOC);
 	  $row_pass = $row_p['pssw_col'];
 	  $usrtipo = $row_p['usrtipo_col'];
   
  		if (password_verify($pssw, $row_pass)) {
  			# code...
 			$_SESSION['userid'] = $row_nombre['id_persona'];
 			$_SESSION['user'] = $row_nombre['Nombre_Completo'];
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

 			echo "<script type=\"text/javascript\"> alert(\"$Welcome\");</script>";
 			if($usrtipo == 'ESPECIALISTA'){
  				echo "<script language=Javascript> location.href=\"inicio.php\"; </script>";
  			} elseif(($usrtipo == 'ADMINISTRADOR')){
  				echo "<script language=Javascript> location.href=\"inicio_admin.php\"; </script>";
  			}  
  		} else {
        echo "<script type=\"text/javascript\">alert(\"$wronguser\");</script>";
      echo "<script language=Javascript> location.href=\"index.php\"; </script>";
    }
  }