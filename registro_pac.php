<?php
include('conexion.php');
include('captura_persona.php');
include('captura_direccion.php');
include('captura_paciente.php');

	
//lectura de datos cn el método POST

	//PERSONA
		$nombre = getNombre(); 			//persona_tb
		$apellidouno = getApellidouno(); //persona_tb
		$apellidodos = getApellidodos(); //persona_tb
		$sexo = getSexo();    			//persona_tb
		$telpersonal = getTelpersonal(); //persona_tb
		$correo = getCorreo(); 			//persona_tb
	//DIRECCION
		$calle =getCalle();      	//direccion_tb
		$num = getNum();				//direccion_tb
		$colonia = getColonia();  	//direccion_tb
		$codpost = getCodpost();  	//direccion_tb
		$telefono = getTelefono();  	//direccion_tb
	//DIRECCION
		$calle =getCalle();      	//direccion_tb
		$num = getNum();				//direccion_tb
	
	 

	
//Conexión con el servidor con funcion conectar (conexion.php)

  $con = conectar();
	
	mysql_select_db("TT",$con);

	if($con){
		
		//echo "Se realizo la conexion"
		
	}
	
	
	//INSERTAR DATOS EN LA BD

  	//Checar si cambiarlos a procedures. Validar que se haya enviado correctamente la info 

  	//Asignar id utilizar funcion COUNT

	$nueva_persona = mysql_query("INSERT INTO persona_tb (id_persona, Nombre_col, apellidouno_col, apellidodos_col, telpersonal_col, correo_col, sexo_col) VALUES ('$id','$nombre', '$apellidouno', '$apellidodos', '$telpersonal', '$correo', '$sexo')");

	$nueva_direccion= mysql_query("INSERT INTO direccion_tb(persona_tb_id_persona, calle_col, num_col, colonia_col, codpost_col, telefono_col)
			VALUES ('$id','$calle', '$num', '$colonia', '$codpost', '$telefono' )");
  //Ver cómo se va a asignar el numero de vestible (registrar número de serie)
	$nuevo_paciente= mysql_query("INSERT INTO paciente_tb(id_paciente, id_vestible) VALUES('$id_pac','$id_vestible')");

	
	header('Location: Bienvenido.php');

 	
	