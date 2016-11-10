<?php
session_start();
include('config.php'); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="cover.css" rel="stylesheet">
    <link rel="shortcut icon" href="SmallLogo.ico" />
    <script src="statics/js/functions.js"></script>
  <TITLE>Chibil</TITLE>
 
</head>


<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>



<div class="container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <a href="verpacientes.php"><img src="imgs/back.svg" width="50px" height=" 50px" > </img></a>
        </div>
      </div>
    </div>

  
<div class="container-fluid" align="center" >
            <?php 
            //RECIBE DATO (CORREO PACIENTE)
          //  $id_paciente = $_SESSION['paciente'];
            $correo_pac = $_POST['correo_paciente'];
           //CONSULTA ID
              $id_pac = "SELECT id_persona FROM $table_persona WHERE correo_col='$correo_pac';";
              $res_id_pac = $conexion -> query($id_pac);
              $row_res_id_pac = $res_id_pac->fetch_array(MYSQLI_ASSOC); 
              $id_paciente = $row_res_id_pac['id_persona'];
            //GENERA VARIABLE DE SESIÓN DE PACIENTE
              $_SESSION['paciente'] = $id_paciente;
            //CONSULTA Nombre del paciente  
              $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto' FROM $table_persona WHERE id_persona='$id_paciente'";
                $res_nombre_pac = $conexion->query($nombre_pac);
                $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
            //Consulta a tabla diagnóstico 
              $diagnostico = "SELECT * FROM $table_diagnostico WHERE Paciente_tb_id_Paciente = '$id_paciente' group by fecha_col order by fecha_col DESC LIMIT 1;";
              //echo "<script type=\"text/javascript\">alert(\"$diagnostico\");</script>";
                $res_diagnostico = $conexion -> query($diagnostico);
                $row_res_diagnostico = $res_diagnostico -> fetch_array(MYSQLI_ASSOC);
            //consulta a tabla alergias
                $alergias = "SELECT * FROM $table_diagnostico WHERE Paciente_tb_id_Paciente = '$id_paciente' group by fecha_col order by fecha_col DESC LIMIT 1;"
            ?>
    
    <div class="row" id="colorletra" align="left"><!--Contenedor datos pac-->
      <div class="col-xs-12 col-md-4" id="caja">  <br /><h7> Paciente: </h7> <h4 align="center" />
        <?php 
          $row_nombre_paciente = $row_res_nombre_pac["NombreCompleto"];
          echo $row_nombre_paciente;
        ?> </h4>
      </div>
      <div class="col-xs-12 col-md-4" id="caja"><br /> <h7> Tipo de crisis: </h7> <h4 align="center" />
        <?php   
          echo $row_res_diagnostico["crisistipo_col"];
        ?>
      </div>
      <div class="col-xs-12 col-md-4" id="caja"><br /> <h7> Alergias Antipilépticos:</h7> <h4 align="center" />
        <?php
          echo $row_res_alergia['antiepilepticos'];
        ?> 
      </div>
    </div> <!--Contenedor datos pacientes-->

    <div class="row" id="paddin" >
      <div class="col-xs-4" align="center">

        <div class="container-fluid" " > <!--Contenedor botones pac-->

          <div class="row"> <!--HistoriaClinica-->
            <div class="col-xs-4">
              <form action="historiaclinica.php" method="POST">
              <input type="submit" class="botonclinica" value="" name="historiaclinica"></input>HISTORIA CLÍNICA
              <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
              </input> 
              </form> 
            </div>
          </div> <!--HistoriaClinica-->

          <div class="row">  <!--Receta-->
            <div class="col-xs-4">
              <form action="receta.php" method="POST">
              <input class="botonnuevareceta" value="" type="submit" name="historiaclinica"></input> RECETA
              <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
              </input> 
              </form>
            </div>          
          </div> <!--Receta-->          


          <div class="row">  <!--Vestible-->
            <div class="col-xs-4">
              <form action="vestible.php" method="POST">
              <input class="botonvestible" value="" type="submit" name="historiaclinica"></input> VESTIBLE
              <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
              </input> 
              </form>
            </div>          
          </div> <!--Vestible-->
        </div><!-- Contenedor botones pac-->

      </div> <!--div class="col-xs-4" align="center"-->

      <div class="col-xs-8">
        <div class="container-fluid" align="center"> <!--contenedor datos DX trata y cobinaciones de tratamientos previos-->

          <div class="row" id="container_margin" > <!-- DX -->
            <div class="col-xs-6" id="caja1">
              <h7 id="colorletra">
                <?php 
                  echo "Dx. ".$row_res_diagnostico["padecimientoActual_col"];
                ?>   
              </p></h7>           
            </div>
           </div>  <!-- DX -->

          <div class="row" id="container_margin"> <!-- TRATAMIENTO ACTUAL -->
            <div class="col-xs-6" id="caja1" name="TRATAMIENTO">
              <h7 id="colorletra"><p>  TRATAMIENTO ACTUAL
                <?php 
                  /*echo "Dx. ".$row_res_ultima_fecha['padecimientoActual_col'];*/
                ?>   
              </p></h7>           
            </div>
          </div>  <!-- TRATAMIENTO ACTUAL -->
          <div class="row"  id="container_margin">  <!-- COMBINACIONES TRATAMIENTO -->
            <div class="col-xs-6" id="caja1">
              <h7 id="colorletra"><p> COMBINACIONES DE TRATAMIENTOS 
                <?php 
                  /*echo "Dx. ".$row_res_ultima_fecha['combinciones_col'];*/
                ?>   
              </p></h7>           
            </div>
          </div>  <!-- COMBINACIONES TRATAMIENTO -->
        </div> <!--contenedor datos DX trata y cobinaciones de tratamientos previos-->
      </div> <!-- div class="col-xs-8"> -->
    </div> <!--ROW  -->



</div> <!--DIV CLASS CONTAINER -->
</div>



</body>
</html>
