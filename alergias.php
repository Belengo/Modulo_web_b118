<?php
session_start();
include("config.php");
include("captura_alergias.php");
include("mensajes.php");

     //Generar fecha.
        $date = "SELECT NOW() as 'fecha'";
        $res_date = $conexion -> query($date);
        $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
        $fecha_actual = $row_res_date['fecha'];
        //echo "<script type=\"text/javascript\">alert(\"$fecha_actual\");</script>";

      //id_paciente  
        $id_paciente = $_SESSION['paciente'];
        //echo "<script type=\"text/javascript\">alert(\"$id_paciente\");</script>";

      $topicas= getSustanciaTopica();
      $notasalergias = getNotasAlergias();
  


      $nuevo_heredofam = "INSERT INTO $table_alergias(fecha_col, susTopicas_col, notasAlergia_col, Paciente_tb_id_paciente) VALUES ('$fecha_actual', '$topicas', '$notasalergias', $id_paciente);";

      //echo "<script type=\"text/javascript\">alert(\"$nuevo_heredofam\");</script>";
       
      if (($conexion -> query($nuevo_heredofam) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 



?>



