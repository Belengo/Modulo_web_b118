<?php
session_start();
include('config.php'); 

	//RECIBE DATO (CORREO PACIENTE);
            $id_bitacora = $_POST['idbitacora'];

            $disable_foreign = "SET FOREIGN_KEY_CHECKS=0;";
            $eliminar = "DELETE FROM Bitacora_tb WHERE id_bitacora=$id_bitacora;";
            $eliminar_lectu ="DELETE FROM Lecturas_tb WHERE Bitacora_tb_id_bitacora = $id_bitacora;";
            //echo "<script type=\"text/javascript\">alert(\"$eliminar_lectu\");</script>";
            $enable_foreign = "SET FOREIGN_KEY_CHECKS=1;";
			$conexion->query($disable_foreign);
			$conexion->query($eliminar_lectu);
			$conexion->query($eliminar);			
			$conexion->query($enable_foreign);	

			echo '<script> window.location="vestible.php" </script>';	
?>

