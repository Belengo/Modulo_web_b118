<?php 

include("captura_persona.php");
include("captura_direccion.php");
include("captura_especialista.php");
include("captura_usr.php");
	
//lectura de datos cn el método POST
	//PERSONA
	$nombre = getNombre(); 			//persona_tb
	$apellidouno = getApellidouno(); //persona_tb
	$apellidodos = getApellidodos(); //persona_tb
	$sexo = getSexo();    			//persona_tb
	$telpersonal = getTelpersonal(); //persona_tb
	$correo = getCorreo();		//persona_tb
	//DIRECCION
	$calle = getCalle();      	//direccion_tb
	$num = getNum();				//direccion_tb
	$colonia = getColonia();  	//direccion_tb
	$codpost = getCodpost();  	//direccion_tb
	$telefono = getTelefono();  	//direccion_tb
	//ESPECIALISTA
	$cedula = getCedula(); 				//especialista_tb
	$especialidad = getEspecialidad();	//especialista_tb
	//CUENTA DE USUARIO
	$contrasena = getContrasena();		//usuario_tb
	$recontrasena = getRecontrasena();  
	 //*******Validar contraseña sea igual******** 
	
//Conexión con el servidor con funcion conectar (conexion.php)
required("conexion.php");
	//INSERTAR DATOS EN LA BD
	mysql_query("INSERT INTO Persona_tb (id_persona, nombre_col, apellidouno_col, apellidodos_col, telpersonal_col, correo_col, sexo_col) VALUES (DEFAULT, '$nombre','$apellidouno','$apellidodos','$sexo','$
	telpersonal','$correo')");

	
	
	if(mysql_query($nueva_persona)){
		echo "Nueva persona guardada correctamente";
	} else{
		echo "Error: ". $sql."<br>".mysqli_error($con);
	}
/*	$id=mysql_query("SELECT id_persona FROM Persona_tb where nombre='$nombre'");

	mysql_query("INSERT INTO Direccion_tb VALUES ('$id', '$calle', '$num', '$colonia', '$codpost', 'telefono')";)
	mysql_query("INSERT INTO Usuario_tb VALUES('$contraseña','$id')");
	mysql_query("INSERT INTO 'especialista_tb'  VALUES('$id','$cedula', '$especialidad')");*/
	

 	
	
 

	
?>