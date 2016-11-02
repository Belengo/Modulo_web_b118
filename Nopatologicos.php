<?php
session_start();
include("config.php");
include("captura_nopatologicos.php");
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

      $tabaquismo = getTabaquismo();
      $alcoholismo = getAlcoholismo();
      $drogas = getDrogas();
      $notasnopatologico = getNotasNoPatologicos();
        

      $nuevo_nopatologico = "INSERT INTO $table_antecedentesNopatologicos(fecha_col, tabaquismo_col, alcoholismo_col, droga_col, notasNopato_col, Paciente_tb_id_paciente) VALUES ('$fecha_actual', '$tabaquismo', '$alcoholismo', '$drogas', '$notasnopatologico',$id_paciente);";

      //echo "<script type=\"text/javascript\">alert(\"$nuevo_nopatologico\");</script>";
      
      if (($conexion -> query($nuevo_nopatologico) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 

?>