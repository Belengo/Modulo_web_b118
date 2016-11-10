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

	$('.a').on('click',function(){
    var trPrincipal = this.offsetParent.parentElement; //Buscamos el TR principal
    var sustancia=trPrincipal.children[0].outerText; //captura sustancia
    var presentacion=trPrincipal.children[1].outerText; //captura presentacion
    //var peso=trPrincipal.children[3].outerText+' '+trPrincipal.children[2].outerText;
    //var precio=trPrincipal.children[5].outerText;
    // var lastName = trPrincipal.children[1].outerText+' '+trPrincipal.children[2].outerText; //Capturamos el LastName

    $(".othertable").append("<tr><td>"+sustancia+"</td><td>"+presentacion+"</td><td>"+
      dosis+"<td><input type='number' placeholder='Ingrese dosis'/></td>"+ periodo+"<td><input type='text' placeholder='Ingrese periodo'/></td>"+
      duracion+"<td><input type='number' placeholder='Ingrese duracion'/></td>"+Indicación"<td><input type='text' placeholder='Ingrese indicacion'/></td><td><input type='button' class='btneli' id='idbotoneli'></td></tr>");
      trPrincipal.style.display = "none"; //Ocultamos el TR de la Primer Tabla
      var btn_ = document.querySelectorAll(".btneli"); // Buscamos todos los elementos que tengan la clase .btneli
      for(var a in btn_){ //Iteramos la variable btn_
        var b = btn_[a];
        if(typeof b == "object"){ //Solo necesitamos los objetos
          b.onclick = function (){ //Asignamos evento click
            var trBtn = this.offsetParent.parentElement; // buscamos el tr principal de la segunda tabla
            var firstNameBtn = trBtn.children[0].outerText; //Capturamos el FirstName de la segunda tabla
            trBtn.remove(); // eliminamos toda la fila de la segunda tabla
            var tbl = document.querySelectorAll(".table td:first-child"); //Obtenemos todos los primeros elementos td de la primera tabla
            for(var x in tbl){ //Iteramos los elementos obtenidos
              var y = tbl[x];
              if(typeof y == "object"){ //solo nos interesan los object
                if (y.outerText == firstNameBtn){ //comparamos el texto de la variable y vs el firstNameBtn
                  var t = y.parentElement; //capturamos el elemento de la coincidencia
                  t.style.display = ""; //actualizamos el estilo display dejándolo en vacío y esto mostrará nuevamente la fila tr de la primera tabla
                }
              }
            }
          } //Termina onclick
        } //if type of b==object
      }//Termina For
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
        </div>  <!--Recetas-->
 		
 		<div class= "container-fluid">
 			<div class="container">
 				<div class="container">
 												<!-- tabla medic -->
								  <?php
								    //Declarar Consulta 
								    $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
								      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_medicamentos\");</script>"; 
								      //Query de consulta
								      $selec_med = $conexion->query($seleccionar_medicamentos);        
								    //Numero total de pacientes
								      $total_medicamentos = mysqli_num_rows($selec_med);
								  ?>       
								    <table id="idsecond" class="table table-fixed table-hover" >
								        <thead id="colorletra">
								            <tr align="center">
								    	        <td class="col-xs-2">Sustancia Activa</td> 
								        	    <td class="col-xs-2">Presentación</td>
								            </tr>
								        </thead>

								        <tbody align="center" class="buscar" id="colorletra">
								            <?php 
								              for($i=0;$i<$total_medicamentos; $i++){
								                $row = mysqli_fetch_array($selec_med);
								                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
								                <tr data-product-id="<?php $row['id_medicamento']  ?>" >
								                  	<td class="col-xs-2" id="colorletra" >
									                    <?php 
									                      $idsustancia = $row['sustanciaActiva_cat_id_sustanciaActiva'];
									                      $nombresust = "SELECT nombre_col FROM sustanciaActiva_cat WHERE id_sustanciaActiva =$idsustancia ;";
									                      $res_sust = $conexion ->query($nombresust);
									                      $row_sust = mysqli_fetch_array($res_sust);

									                      printf( "%s", $row_sust['nombre_col'] );
									                    ?>
								                    </td>
									                <td class="col-xs-2" id="colorletra"> <?php
									                	?>
									                </td>
								                  	<td class="col-xs-2" id="colorletra"> <?php
									                    $idlab = $row['Laboratorio_cat_id_laboratorio'];
									                    $laboratorio = "SELECT nombre_col FROM Laboratorio_cat WHERE id_laboratorio = $idlab;";
									                    $res_lab = $conexion ->query($laboratorio);
									                    $row_lab = mysqli_fetch_array($res_lab);
									                      printf( "%s", $row_lab['nombre_col'] );
    								                    ?>								                      
								                  	</td>
								                  	<td class="col-xs-1" id="colorletra"> 
									                    <input type="hidden" name="correo_paciente" value="<?php echo $row['id_medicamento'] ?>" width="3" height="3" name="selecciona" >
									                    <input class="a" value="" type="submit"  ></input>  
									                    </input>
								                  	</td>
								                </tr>
								            <?php } ?>
								        </tbody>
								    </table> <!-- termina tabla medic -->
 				</div>
				<div class="container">
				  <h2>Tratamiento</h2>
				  <p></p>
				  <table class="othertable table table-hover " id="colorletra">
				    <thead>
				      <tr>
				        <th>Sustancia Activa</th>
				        <th>Presentación</th>
				        <th>Dosis</th>
				        <th>Periodo de toma</th>
				        <th>Duración</th>
				        <th>Indicación</th>
				        <th> </th>
				      </tr>
				    </thead>
				    <tbody>
				    </tbody>
				  </table>
				</div>	   
 			</div>
 		</div>

        <div class="row">
        	<div class="col-xs-6">
            	<form action="PDFreceta.php" method="POST"> 
		            <input type="submit" class="botonimprimir" value="" name="historialreceta"></input>
		            <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
		            </input> 
            	</form> 
            </div>  
            <div class="col-xs-6">         
            	<form action="receta.php" method="POST">
	                <input type="submit" class="botonreceta" value="" name="historialreceta"></input>
	                <input type="hidden" name="correo_paciente" value="<?php echo $correo_pac ?>" width="30" height="30" >
	                </input> 
            	</form> 
            </div>
        </div>
</div>


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
	                                <h4 id="colorletra">Buscar medicamento:</h4> <input type="search" class="form-control" id="filtrar" placeholder="..." name="buscador" ></input>
	                            </form>  
							<!-- tabla medic -->
								  <?php
								    //Declarar Consulta 
								    $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
								      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_medicamentos\");</script>"; 
								      //Query de consulta
								      $selec_med = $conexion->query($seleccionar_medicamentos);        
								    //Numero total de pacientes
								      $total_medicamentos = mysqli_num_rows($selec_med);
								  ?>       
								    <table id="idsecond" class="table table-fixed table-hover" >
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
								                <tr data-product-id="<?php $row['id_medicamento']  ?>" >
								                  	<td class="col-xs-2" id="colorletra" >
									                    <?php 
									                      $idsustancia = $row['sustanciaActiva_cat_id_sustanciaActiva'];
									                      $nombresust = "SELECT nombre_col FROM sustanciaActiva_cat WHERE id_sustanciaActiva =$idsustancia ;";
									                      $res_sust = $conexion ->query($nombresust);
									                      $row_sust = mysqli_fetch_array($res_sust);

									                      printf( "%s", $row_sust['nombre_col'] );
									                    ?>
								                    </td>
									                <td class="col-xs-2" id="colorletra"> <?php
									                	?>
									                </td>
								                  	<td class="col-xs-2" id="colorletra"> <?php
									                    $idlab = $row['Laboratorio_cat_id_laboratorio'];
									                    $laboratorio = "SELECT nombre_col FROM Laboratorio_cat WHERE id_laboratorio = $idlab;";
									                    $res_lab = $conexion ->query($laboratorio);
									                    $row_lab = mysqli_fetch_array($res_lab);
									                      printf( "%s", $row_lab['nombre_col'] );
    								                    ?>								                      
								                  	</td>
								                  	<td class="col-xs-1" id="colorletra"> 
									                    <input type="hidden" name="correo_paciente" value="<?php echo $row['id_medicamento'] ?>" width="3" height="3" name="selecciona" >
									                    <input class="a" value="" type="submit"  ></input>  
									                    </input>
								                  	</td>
								                </tr>
								            <?php } ?>
								        </tbody>
								    </table> <!-- termina tabla medic -->
                            </div> <!--modal body -->

                            <div class="modal-footer">                   
                            </div>

                        </div> <!-- modal content-->
                    </div> <!--modal-dialog modal-lg -->
                </div> <!-- modal fade-->  



</body>
</html>