<?php
 session_start();
include("config.php");
   if(isset($_SESSION['userid'])){
    } else {
      echo '<script> window.location="index.php" </script>';
    }
 ?>

 <?php
      //recibe correo

	  $correo_pac = $_POST['correo_paciente'];

        $id_pac = $_SESSION['paciente']; 
        $disable_foreign = "SET FOREIGN_KEY_CHECKS=0;";
          $conexion->query($disable_foreign);
        $eliminar_per = "DELETE FROM $table_persona WHERE id_persona=$id_pac;";
          $conexion->query($eliminar_per);
        $eliminar_pac = "DELETE FROM $table_paciente WHERE id_paciente=$id_pac;";
           $conexion->query($eliminar_pac);
        $eliminar_dir = "DELETE FROM $table_direccion WHERE persona_tb_id_persona=$id_pac;";
            $conexion->query($eliminar_dir);

        $enable_foreign = "SET FOREIGN_KEY_CHECKS=1;";
            $conexion->query($enable_foreign);

        echo '<script> window.location="verpacientes.php" </script>';
?>