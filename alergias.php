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
      $anticonvulsivos = getAnticonvulsivos();
  


      $nuevo_alergia= "INSERT INTO $table_alergias(fecha_col, susTopicas_col, notasAlergia_col, Paciente_tb_id_paciente, Antiepilepticoalergia_col) VALUES ('$fecha_actual', '$topicas', '$notasalergias', $id_paciente, '$anticonvulsivos');";

      
       
      if (($conexion -> query($nuevo_alergia) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 



?>



