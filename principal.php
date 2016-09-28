
<?php
	



	$dbhost = "localhost";
	$dbname = "prueba" 
	$user = "root";
	$pass = "root";
		
	$con=mysql_pconnect($dbhost,$user,$pass) 
		or trigger_error(mysql_error(),E_USER_ERROR);
		mysql_select_db($dbname);
	

	/*include("conexion.php");
	include("captura_persona.php");

	$con=conectar();

	if ($con) {
		# code...

	//echo "Se realizo la conexion";

	mysql_select_db("mydb",$con);
	$idUsuario= "1";
	$nombre = getNombre(); 			//persona_tb
	$apellidouno = getApellidouno(); //persona_tb
	$apellidodos = getApellidodos();
	
	$nuevo_usuario="INSER INTO Usuario ( idUsuario, Nombre_col, Apellidouno_col, Apellidodos_col) VALUES ('$idUsuario','$nombre', '$apellidouno', '$apellidos')";
	mysql_query($nuevo_usuario,$con);	
	}

	if ($nuevo_usuario) {
		echo "usuario registrado correctamente";
		# code...
	}*/




?>



