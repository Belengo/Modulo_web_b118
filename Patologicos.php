<?php
session_start();
include("config.php");
include("captura_patologicos.php");
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

      $cirugia = getCirugias();
      $hospitalizacion = getHospitalizaciones();
      $traumatismo = getTraumatismos();
      $transfusiones = getTransfusiones();
      $notasPatologicos = getNotasPatologicos();
     

      $nuevo_patologico = "INSERT INTO $table_antecedentesPatologicos(fecha_col, cirugia_col, traumatismo_col,hospitalizacion_col, transfusion_col, notasPato_col, Paciente_tb_id_paciente) VALUES ('$fecha_actual', '$cirugia', '$hospitalizacion', '$traumatismo', '$transfusiones', '$notasPatologicos', $id_paciente);";

      //echo "<script type=\"text/javascript\">alert(\"$nuevo_patologico\");</script>";
      
      if (($conexion -> query($nuevo_patologico) === TRUE)){
        echo "<script type=\"text/javascript\">alert(\"$MensajeGuardadoCorrectamente\");</script>";
         echo '<script>window.location ="historiaclinica.php" </script>';
      } 

?>