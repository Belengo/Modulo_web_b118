<?php
session_start();
include("config.php");
include("captura_diagnostico.php");
include("mensajes.php");

$id_paciente = $_SESSION['paciente'];

  
      //Mensajes
      
     //Generar fecha.
        $date = "SELECT NOW() as 'fecha'";
        $res_date = $conexion -> query($date);
        $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
        $fecha_actual = $row_res_date['fecha'];
        //echo "<script type=\"text/javascript\">alert(\"$fecha_actual\");</script>";

      //id_paciente  
        
        //echo "<script type=\"text/javascript\">alert(\"$id_paciente\");</script>";

      $motivoConsulta  = getMotivo();
      $exploracionNeuro = getExploracion();
      $padecimiento = getPadecimiento();
      $tipodecrisis = getCrisiTipo();
      $notasdiagnostico = getNotasDiagnostico();

      $nuevo_diagnostico = "INSERT INTO $table_diagnostico(fecha_col, crisistipo_col, Paciente_tb_id_Paciente, padecimientoActual_col, motivoConsulta_col, exploracionNeurologica_col, notas_col) VALUES ('$fecha_actual', '$tipodecrisis', $id_paciente, '$padecimiento', '$motivoConsulta', '$exploracionNeuro', '$notasdiagnostico');";
      //echo "<script type=\"text/javascript\">alert(\"$nuevo_diagnostico\");</script>";
         
      if (($conexion -> query($nuevo_diagnostico) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 
 



?>


       



       


