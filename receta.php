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

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->

<script type="text/javascript" src="jvs/functions.js">

</script> 
</head>
<body>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
	<?php
        $id_pac = $_SESSION['paciente']; 
        //$correo_pac = $_POST['correo_paciente']; 
          $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
    ?>

<div class="container-fluid">
  <div class="container">

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="pag_paciente.php" method="POST">
	        <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo'] ?>" width="3" height="3" >
	        <input class="botonregresar" value="" type="submit" name="ver">
	        </input>  
	        </input>
      	  </form>
        </div>
      </div>
    </div>

    <div class="col-xs-12">
    		<h3>Generar Tratamiento</h3>
    </div>

	<div class="row" id="colorletra"> <!--Recetas-->
	    <div class="col-xs-6" align="left" id="little_margin" > 
	      	<button type="button" class="botonagregarmedicamento" data-toggle="modal" data-target="#myModal"></button>Ver Medicamentos
	    </div> <!--col-xs-6 -->
		<div class="row" align="CENTER"> </div>            
	</div>  <!--Recetas-->

	<div class="table-responsive" id="little_margin" >
	    <table id="target" class="table table-hover">
	      	<thead>
		        <tr>
              <th>&nbsp;</th>
		          <th>Sustancia Activa</th>
		          <th>Presentación</th>
		          <th>Dosis</th>
		          <th>Periodo</th>
		          <th>Duración</th>
		          <th>Indicación</th>
		          <th>&nbsp;</th>
		        </tr>
	      	</thead>
	        <tbody>
	      	</tbody>
	    </table>
	</div>
 </div>


<div class="container"> <!-- contenedor botones -->
  <div class="row" id="little_margin">
  	<div class="col-xs-4">
      <form onsubmit="savePurchase(event)" method="POST"> 
        <input type="submit" class="botonguardar" value="" name="guardar_receta"></input>
        <input type="hidden" name="id_paciente" value="<?php echo $id_pac ?>" width="30" height="30" >
        </input> 
        <input type="hidden" name="id_especialista" value="<?php echo $_SESSION['userid'] ?>" width="30" height="30" >
        </input>        
      </form> 
    </div>
    <div class="col-xs-4">
      <form action="PDFreceta.php" method="POST"> 
        <input type="submit" class="botonimprimir" value="" name="historialreceta"></input>
        <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
        </input> 
      </form> 
    </div>  
    <div class="col-xs-4">         
      <form action="receta.php" method="POST">
        <input type="submit" class="botonreceta" value="" name="historialreceta"></input>
        <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
        </input> 
      </form> 
    </div>
  </div>
</div>  <!-- contenedor botones -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">         
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar medicamento</h4>
          </div>
          <div class="modal-body"> <!--modal body -->
            <?php
              //Declarar Consulta 
              $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
              //echo "<script type=\"text/javascript\">alert(\"$seleccionar_medicamentos\");</script>"; 
              //Query de consulta
              $selec_med = $conexion->query($seleccionar_medicamentos);        
              //Numero total de pacientes
              $total_medicamentos = mysqli_num_rows($selec_med);
            ?>       

            <form> 
              <h4 id="colorletra">Buscar medicamento:</h4> <input type="search" class="form-control" id="filtrar" placeholder="Buscar medicamento..." name="buscador" ></input>
            </form>        

            <div class="table table-hover">
              <table id="source" class="table table-fixed table-hover">
                <thead id="colorletra">
                  <tr>
                    <th>id</th>
                    <th>Sustancia Activa</th>
                    <th>Presentacion</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody class="buscar" id="colorletra">
                  <?php for($i=0;$i<$total_medicamentos; $i++){
                      $row = mysqli_fetch_array($selec_med);
                      //while($row = mysqli_fetch_array($selec_pac)){ ?>
                    <tr>
                      <td><p class="id_med"><?php printf("%d", $row['id_medicamento']); ?> </p></td>
                      <td><?php 
                        $idsustancia = $row['sustanciaActiva_cat_id_sustanciaActiva'];
                        $nombresust = "SELECT nombre_col FROM $catalogo_sustanciaActiva WHERE id_sustanciaActiva =$idsustancia ;";
                        $res_sust = $conexion ->query($nombresust);
                        $row_sust = mysqli_fetch_array($res_sust);
                        printf( "%s", $row_sust['nombre_col'] ); ?>
                      </td>
                      <td id="colorletra"> 
                        <?php
                          $idpresentacion = $row['Presentacionmedic_cat_id_Presentacionmedic'];
                          $Presentacionmedic = "SELECT * FROM $catalogo_presentacionMedic WHERE  id_presentacionmedic = $idpresentacion ;";
                          $res_presentacion = $conexion ->query($Presentacionmedic);
                          $row_presentacion = mysqli_fetch_array($res_presentacion);

                          $idempaque = $row_presentacion['empaque_cat_id_empaquemed'];
                            $empaque =$conexion->query("SELECT nombreEmpaque_col FROM $catalogo_empaque WHERE id_empaque = $idempaque");
                              $row_empaque = mysqli_fetch_array($empaque);
                              $empa = $row_empaque['nombreEmpaque_col'];      
                          $idcantidad = $row_presentacion['cantidad_cat_id_cantidad'];
                            $cantidad =$conexion->query("SELECT cantidad_col FROM $catalogo_cantidad WHERE id_cantidad = $idcantidad");
                            $row_cantidad = mysqli_fetch_array($cantidad);

                          $idpresen = $row_presentacion['presentacion_cat_id_presentacion'];
                              $presen = $conexion->query("SELECT presentacion_col FROM $catalogo_presentacion WHERE id_presentacion = $idpresen");
                              $row_presen = mysqli_fetch_array($presen);

                          $idunidades = $row_presentacion['Unidades_cat_id_Unidades'];
                              $unidades = $conexion->query("SELECT cantidad_col FROM $catalogo_unidades WHERE id_unidades = $idunidades");
                              $row_unidades = mysqli_fetch_array($unidades);

                          $idmedida = $row_presentacion['Medida_cat_idmedida_cat'];
                              $medida = $conexion->query("SELECT medida_col FROM $catalogo_medida WHERE idmedida_cat = $idmedida");
                              $row_medida = mysqli_fetch_array($medida);

                            printf("%s %s %s %s %s", $row_empaque['nombreEmpaque_col'], $row_cantidad['cantidad_col'], $row_presen['presentacion_col'], $row_unidades['cantidad_col'], $row_medida['medida_col'] );
                        ?>
                      </td>
                      <td>&nbsp;</td>
                      <td>
                        <button onclick="add(this)" class="botonagregarmedic">
                        </button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div> <!--div class table responsive -->
          </div> <!--modal body -->
          <div class="modal-footer">                   
          </div>
        </div> <!-- modal content-->
      </div> <!--modal-dialog modal-lg -->
    </div> <!-- modal fade-->  
</div> <!-- container fluid-->
  


</body>
</html>