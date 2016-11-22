<?php
session_start();
include('config.php'); 

        $id_pac = $_SESSION['paciente']; 
        $id_session = $_SESSION['userid'];


        $select_vestible ="SELECT Vestible_cat_idVestible_cat FROM $table_paciente WHERE id_paciente=$id_pac;";
        //echo "<script type=\"text/javascript\">alert(\"$select_vestible\");</script>"; 
        $res_ves = $conexion->query($select_vestible);
        $row_vest= $res_ves-> fetch_array(MYSQLI_ASSOC);
        $id_vestible = $row_vest['Vestible_cat_idVestible_cat'];
        //echo "<script type=\"text/javascript\">alert(\"$id_vestible\");</script>";

        $ultimo_id_bitacora = "SELECT MAX(id_bitacora) AS id FROM Bitacora_tb;";
        //echo "<script type=\"text/javascript\">alert(\"$ultimo_id_bitacora\");</script>"; 
        $res_ultimo = $conexion ->query($ultimo_id_bitacora);
        $row_ultimo = $res_ultimo->fetch_array(MYSQLI_ASSOC);
        $ultimo_id = $row_ultimo['id'];
        $id_bita = (int)$ultimo_id;
        $id_bitacora = $id_bita + 1;
		//echo "<script type=\"text/javascript\">alert(\"$id_bita\");</script>"; 
		//printf("%d %s", $id_bita, $ultimo_id);

		$uploadedfileload="true";
		$uploadedfile_size=$_FILES['uploadedfile'][size];
		//echo $_FILES[uploadedfile][name];
		if ($_FILES[uploadedfile][size]>500000)
		{$msg=$msg."El archivo es mayor que 500KB, debes reduzcirlo antes de subirlo<BR>";
		$uploadedfileload="false";}

		if (!($_FILES[uploadedfile][type] =="text/plain"))
		{$msg=$msg." Tu archivo tiene que ser .txt, No se permiten otras extensiones <BR>";
		$uploadedfileload="false";}

		$file_name=$_FILES[uploadedfile][name];
		$add="$file_name";
		if($uploadedfileload=="true"){

		if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
		echo "<script type=\"text/javascript\">alert(\"Se ha subido satisfactoriamente\");</script>";

			
			$lineas = file($file_name);
			array_shift($f); //se quita el primer elemento
			$insert_bitacora = "INSERT INTO Bitacora_tb VALUES('$id_bitacora', '2016-11-21', '$id_vestible');";
			//echo "<script type=\"text/javascript\">alert(\"$insert_bitacora\");</script>";
			$conexion->query($insert_bitacora);

			foreach ($lineas as $linea_num => $linea)
				{
					$datos = explode(",",$linea);

					$fecha= trim($datos[0]);
					$temperatura = trim($datos[1]);
					$frecuencia = trim($datos[2]);
				    $insert_lectura = "INSERT INTO Lecturas_tb (frec_col, temp_col, tiempo_col, Bitacora_tb_id_bitacora) VALUES('$frecuencia', '$temperatura','$fecha', $id_bitacora);";
				    //echo "<script type=\"text/javascript\">alert(\"$insert_lectura\");</script>";
					$conexion->query($insert_lectura);

				}
			echo '<script> window.location="vestible.php" </script>';

		} else{
			echo "<script type=\"text/javascript\">alert(\"Error al subir el archivo\");</script>"; 
			echo '<script> window.location="vestible.php" </script>';
		}

		} else {
			echo $msg;
			echo '<script> window.location="vestible.php" </script>';
		}
		

?>

