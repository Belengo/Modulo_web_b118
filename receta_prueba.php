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

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function () {
            (function ($) {
              $('#table').hide();
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('#table').show();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
		});
      </script> 
</head>


<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>


<div class="container-fluid">

        <div class="row" id="colorletra"> <!--Recetas-->
            <div class="col-xs-6" > 
              <button type="button" class="botonagregarmedicamento" data-toggle="modal" data-target="#myModal"></button>Agregar medicamento
              </div> <!--col-xs-6 -->
                <div class="row" align="CENTER"> </div>
                    <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        
                        <!-- Modal content-->
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nueva Receta</h4>
                            </div>
                            <div class="modal-body"> <!--modal body -->
	                            <form> 
	                                <h4 id="colorletra">Ingrese medicamento:</h4> <input type="search" class="form-control" id="filtrar" placeholder="..." name="buscador" ></input>
	                            </form>  
							<!-- tabla medic -->
								<div class="container" id="margen">
								  <?php
								    //Declarar Consulta 
								    $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
								      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_medicamentos\");</script>"; 
								      //Query de consulta
								      $selec_med = $conexion->query($seleccionar_medicamentos);        
								    //Numero total de pacientes
								      $total_medicamentos = mysqli_num_rows($selec_med);
								  ?>       
								        <table id="table" class="table table-fixed" >
								          <thead id="colorletra">
								            <tr align="center">
								              <td class="col-xs-2">Sustancia Activa</td> 
								              <td class="col-xs-2">Presentación</td>
								              <td class="col-xs-2">Laboratorio</td>
								            </tr>
								          </thead>

								          <tbody align="center" class="buscar" id="colorletra">
								            <?php 
								              for($i=0;$i<$total_medicamentos; $i++){
								                $row = mysqli_fetch_array($selec_med);
								                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
								                <tr>
								                  <td class="col-xs-4" id="colorletra" >
								                    <?php 
								                      $idsustancia = $row['sustanciaActiva_cat_id_sustanciaActiva'];
								                      $nombresust = "SELECT nombre_col FROM sustanciaActiva_cat WHERE id_sustanciaActiva =$idsustancia ;";
								                      $res_sust = $conexion ->query($nombresust);
								                      $row_sust = mysqli_fetch_array($res_sust);

								                      printf( "%s", $row_sust['nombre_col'] );
								                    ?>
								                  </td>

								                  <td class="col-xs-4" id="colorletra"> <?php
								                    ?>
								                  </td>

								                  <td class="col-xs-4" id="colorletra"> <?php
								                      $idlab = $row['Laboratorio_cat_id_laboratorio'];
								                      $laboratorio = "SELECT nombre_col FROM Laboratorio_cat WHERE id_laboratorio = $idlab;";
								                      $res_lab = $conexion ->query($laboratorio);
								                      $row_lab = mysqli_fetch_array($res_lab);

								                      printf( "%s", $row_lab['nombre_col'] );
								                       ?>
								                      
								                  </td>

								                  <td class="col-xs-1" id="colorletra"> 
								                    
								                    <input type="hidden" name="correo_paciente" value="<?php echo $row['id_medicamento'] ?>" width="3" height="3" name="selecciona" >
								                    <input class="botonagregarmedicamento" value="" type="submit"  ></input>  
								                    </input>
								                    
								                  </td>
								                </tr>
								            <?php } ?>
								          </tbody>
								        </table>
								  
								  </div> <!-- container -->

								<!-- termina tabla medic -->
                            </div> <!--modal body -->

                            <div class="modal-footer">                   
                            </div>

                        </div> <!-- modal content-->
                    </div> <!--modal-dialog modal-lg -->
                </div> <!-- modal fade--> 
            
        </div>  <!--Recetas-->
 		
 		<div class= "container-fluid">

 		</div>


        <div class="row">
        	<div class="col-xs-6">
            	<form action="PDFreceta.php" method="POST"> Imprimir
		            <input type="submit" class="botonimprimir" value="" name="historialreceta"></input>
		            <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
		            </input> 
            	</form> 
            </div>  
            <div class="col-xs-6">         
            	<form action="receta.php" method="POST"> Historial
	                <input type="submit" class="botonreceta" value="" name="historialreceta"></input>
	                <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
	                </input> 
            	</form> 
            </div>
        </div>
</div>

</body>
</html>