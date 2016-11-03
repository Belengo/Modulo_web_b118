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
  <TITLE>Chibil</TITLE>
</head>


<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>



<!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
      </div>
           
        <div class="collapse navbar-collapse" id="myNavbar">
            
          <ul class="nav navbar-nav navbar-right">
                  
              <a href="index.php" >
              <span id="colorletra" style="margin-top:3px;"><img src="linkedinsquare.png">Chibil</span> </a> </img>
                  
              </ul><!-- /
              ul nav bar-->
      </div>  <!-- div class="collapse navbar-collapse" -->
    </div> <!-- div class="container" -->
</nav>


<div class="site-wrapper">
  <div id ="colorletra" class="container-fluid" align="center">
    <div class="container-fluid">
      
      <div class="jumbotron text-center">
        <h1 >Dr. Nombre Apellidouno<!--NOMBRE DEL Dr.--> </h1>
        <p>Bienvenido a Chibil</p>
      </div>
      
<div class="container">
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

    <div class="row" style="margin-top:10%;" >
      <div class="col-xs-4" align="center">
        <div class="container-fluid"  style="margin-top:7%;" > <!--Contenedor botones pac-->
          <div class="row" style="margin-top:7%;"> <!--HistoriaClinica-->
            <div class="col-xs-4">
              <form action="historiaclinica.php" method="POST">
              <input type="submit" class="botonclinica" value="" name="historiaclinica"></input>HISTORIA CLÍNICA
              <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
              </input> 
              </form> 
            </div>
          </div> <!--HistoriaClinica-->
          
          <div class="row" style="margin-top:7%;"> <!--Recetas-->
            <div class="col-xs-4" > 
              <button type="button" class="botonnuevareceta" data-toggle="modal" data-target="#myModal"></button>RECETA 
                <div class="row" align="CENTER"> </div>
                    <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        
                        <!-- Modal content-->
                        <div class="modal-content" style="margin-top: 7%">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nueva Receta</h4>
                            </div>
                            <div class="modal-body">
                             <!--modal body -->
                             <form> <!--AQUI APARECEN  LA SUGERENCIAS -->
                                Ingrese medicamento: <input type="text" size="50" id="service" name="service" />
                               <div id="suggestions"> </div>            
                            </form>  
                            </div>

                            <div class="modal-footer">
                            <div class="row">
                              
                                <form action="PDFreceta.php" method="POST"> Imprimir
                                <input type="submit" class="botonimprimir" value="" name="historialreceta"></input>
                                <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
                                </input> 
                                </form> 
                              
                                <form action="receta.php" method="POST"> Historial
                                <input type="submit" class="botonreceta" value="" name="historialreceta"></input>
                                <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
                                </input> 
                                </form> 
                              
                            </div>
                                
                            </div>
                        </div>
                    </div>
                </div> <!-- modal fade--> 
            </div>
          </div>  <!--Recetas-->

          <div class="row" style="margin-top:7%;">  <!--Vestible-->
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

          <div class="row" style="margin-top:7%;"> <!-- DX -->
            <div class="col-xs-6" id="caja1">
              <h7 id="colorletra">
                <?php 
                  echo "Dx. ".$row_res_diagnostico["padecimientoActual_col"];
                ?>   
              </p></h7>           
            </div>
           </div>  <!-- DX -->

          <div class="row" style="margin-top:7%;"> <!-- TRATAMIENTO ACTUAL -->
            <div class="col-xs-6" id="caja1" name="TRATAMIENTO">
              <h7 id="colorletra"><p>  TRATAMIENTO ACTUAL
                <?php 
                  /*echo "Dx. ".$row_res_ultima_fecha['padecimientoActual_col'];*/
                ?>   
              </p></h7>           
            </div>
          </div>  <!-- TRATAMIENTO ACTUAL -->

          <div class="row" style="margin-top:7%;">  <!-- COMBINACIONES TRATAMIENTO -->
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

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="right"> 
          <a href="verpacientes.php"> <img src="imgs/back.svg" width="50px" height=" 50px"> </img> </a>
        </div>
      </div>
    </div>

</div> <!--DIV CLASS CONTAINER -->


    </div> <!-- DIV CLASS CONTAINER FLUID -->
  </div> <!--div CONTAINER fluid color letra-->
</div> <!-- class="site-wrapper"-->


<footer class="footer">
    <div class="container">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
  	</div>
</footer>

</body>
</html>
