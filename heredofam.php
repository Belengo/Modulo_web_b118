<?php
session_start();
include("config.php");
include("captura_heredofam.php");
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

      $cancer = getCancer();
      $respiratorias = getRespiratorias();
      $cerebrovasculares = getCerebrovasculares();
      $neurologicos = getTranstornosNeurologicos();
      $diabetes = getDiabetes();
      $hipertensión = getHipertension();
      $notasHeredofam = getNotasHeredo();


      $nuevo_heredofam = "INSERT INTO $table_antecedentesHeredo(fecha_col, cancer_col, enfRespiratoria_col,diabetes_col, enfCerebroVasc_col, transtornosNeuro_col, hipertension_col, notasHeredo_col,Paciente_tb_id_paciente) VALUES ('$fecha_actual', '$cancer', '$respiratorias', '$diabetes', '$cerebrovasculares', '$neurologicos', '$hipertensión', '$notasHeredofam', $id_paciente);";

      //echo "<script type=\"text/javascript\">alert(\"$nuevo_diagnostico\");</script>";
       
      if (($conexion -> query($nuevo_heredofam) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 

?>