<?php
session_start();
include('config.php'); 
include('mensajes.php');

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
  <TITLE>Chibil</TITLE>
      
<script type="text/javascript" src="jvs/functions.js">

</script> 
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
           <a href="verespecialistas.php"><img src="imgs/back.svg" width="50px" height=" 50px"> </img> </a>
        </div>
      </div>
    </div>

  
<div class="container-fluid" align="center" >
            <?php 
            //RECIBE DATO (CORREO PACIENTE)
            $correo_esp = $_POST['correo_especialista'];
           //CONSULTA ID y NOMBRE COMPLETO
              $id_esp = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', id_persona FROM $table_persona WHERE correo_col='$correo_esp';";
              //echo "<script type=\"text/javascript\"> alert(\"$id_esp\");</script>";
              $res_id_esp = $conexion -> query($id_esp);
              $row_res_id_esp = $res_id_esp->fetch_array(MYSQLI_ASSOC); 
              $id_especialista = $row_res_id_esp['id_persona'];
              $row_nombre_especialista = $row_res_id_esp['NombreCompleto'];
            //GENERA VARIABLE DE SESIÓN DE PACIENTE
              $_SESSION['especialista'] = $id_especialista;
            //CONSULTA Pacientes del especialista
              $pacientes_especialista = "SELECT CONCAT (Persona_tb.nombre_col,' ',Persona_tb.apellidouno_col,' ',Persona_tb.apellidodos_col) as 'NombrePaciente', Persona_tb.correo_col, Paciente_tb.id_paciente, Paciente_tb.status_col, Paciente_tb.Especialista_tb_id_Especialista FROM Persona_tb INNER JOIN Paciente_tb ON Paciente_tb.id_paciente = Persona_tb.id_persona and Paciente_tb.Especialista_tb_id_Especialista =  $id_especialista;";
              //echo "<script type=\"text/javascript\"> alert(\"$pacientes_especialista\");</script>";
              $res_pacientes_especialista = $conexion ->query($pacientes_especialista);
               $total_pacientes = mysqli_num_rows($res_pacientes_especialista);
            ?>
    
    <div class="row" id="colorletra" align="left"><!--Contenedor datos pac-->
      <div class="col-xs-12 col-md-4" id="caja">  <br /><h7> Especialista: </h7> <h4 align="center" />
        <?php 
            echo $row_nombre_especialista;
        ?> </h4>
      </div>
    </div> <!--Contenedor datos pacientes-->

    <div class="row" id="paddin" >
      <div class="col-xs-4" align="center">
        <div class="container-fluid" " > <!--Contenedor botones pac-->
          <div class="row"> <!--HistoriaClinica-->

          </div> <!--HistoriaClinica-->
        </div><!-- Contenedor botones pac-->
      </div> <!--div class="col-xs-4" align="center"-->     
    </div> <!--ROW  -->
    <div class="row"  id="tabla_pacientes">
        <div class="panel panel-default"> 
          <div class="panel-heading"> 
           <div class="col-xs-4"> </div>
            <div class="col-xs-4"> </div>    
            <div class="col-xs-4">
              <div class="input-group"> 
                <input type="search" class="form-control" id="filtrar" placeholder="Buscar paciente..."></input>
              </div>
            </div>

            <br /> </br/>
          </div> <!--div class panel heading-->
            <table id="colorletra" class="table table-fixed" >
              <thead>
                <tr style="font-weight:bold" align="center">
                  <td class="col-xs-3"><img class="img-thumbnail" src= "imgs/id-card.svg" width="40" height="40" ></img></td> 
                  <td class="col-xs-3"><img class="img-thumbnail" src= "imgs/usuario.svg" width="40" height="40" > </img></td>
                  <td class="col-xs-3"><img class="img-thumbnail" src="imgs/multimedia.svg" width="40" height="40" ></img></td>
                  <td class="col-xs-3"><img class="img-thumbnail" src="imgs/status.svg" width="40" height="40" ></img></td>
                </tr>
              </thead>
              <tbody align="center" class="buscar">
                <?php 
                  for($i=0;$i<$total_pacientes; $i++){
                    $row_pacientes = $res_pacientes_especialista->fetch_array(MYSQLI_ASSOC);
                     //while($row = mysqli_fetch_array($selec_pac)){ ?>
                    <tr>
                      <td class="col-xs-3" id="colorletra" >
                        <?php  
                          printf( "%s", $row_pacientes['NombrePaciente']); ?>
                      </td>
                      <td class="col-xs-3" id="colorletra"> <?php 
                          printf( "%s", $row_pacientes['id_paciente']); ?>
                      </td>
                      <td class="col-xs-3" id="colorletra"> <?php 
                          printf( "%s", $row_pacientes['correo_col']); ?>
                      </td>
                      <td class="col-xs-3" id="colorletra" name="status_div"> <?php
                          if ($row_pacientes['status_col'] == 1){
                            echo '<img class="img-thumbnail" src="imgs/cambiar1.svg" width="40" height="40" style="border:0">';
                          } else
                            echo '<img class="img-thumbnail" src="imgs/cambiar0.svg" width="40" height="40" style="border:0"> '; 
                          ?>
                      </td>
                      <td class="col-xs-1" id="colorletra"> 
                        <form action="paciente.php" method="POST">
                            <input type="hidden" name="correo_paciente" value="<?php echo $row_pacientes['correo_col']; ?>" width="3" height="3" >
                            <input type="hidden" name="correo_especialista" value="<?php echo $correo_esp; ?>" width="3" height="3" ></input>
                          <button class="botoncontacto" value="" type="submit" name="ver"></button>                         
                        </form> 
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
        </div> <!-- panel panel-default"> -->
      </div> <!-- div class row-->

</div> <!--DIV CLASS CONTAINER- fluid aign center -->
</div> <!--DIV CLASS CONTAINER-fluid -->




</body>
</html>