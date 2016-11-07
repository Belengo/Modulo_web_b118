<?php
 session_start();
include("config.php");
   if(isset($_SESSION['userid'])){
    } else {
      echo '<script> window.location="index.php" </script>';
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="cover.css" rel="stylesheet">
   <!--css incon--> <link href="css_root/flaticon.css" rel="stylesheet">
    <link rel="shortcut icon" href="SmallLogo.ico" />
	<TITLE>Chibil</TITLE>
</head>
<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>
  

<div class="container-fluid" >
<?php

$correo_esp = $_POST['correo_especialista'];
$correo_pac= $_POST['correo_paciente'];
					
				$persona = "SELECT * FROM $table_persona WHERE correo_col = '$correo_pac';";
				//echo "<script type=\"text/javascript\"> alert(\"$id\");</script>";
                $res_persona = $conexion -> query($persona);
                $row_pers = $res_persona->fetch_array(MYSQLI_ASSOC);
                $id = $row_pers['id_persona'];
                $edad = "SELECT YEAR(CURDATE()) - (SELECT YEAR(fechanac_col))as 'edad' FROM $table_persona where id_persona = $id;";
                //echo "<script type=\"text/javascript\"> alert(\"$edad\");</script>";
                $res_edad = $conexion -> query($edad);
                $row_edad = $res_edad -> fetch_array(MYSQLI_ASSOC);
                $Consulta_direc= "SELECT * from $table_direccion where persona_tb_id_persona = $id";
                echo "<script type=\"text/javascript\"> alert(\"$Consulta_direc\");</script>";
                $res_direc = $conexion->query($Consulta_direc);
                $row_direc = $res_direc->fetch_array(MYSQLI_ASSOC);



 ?>

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="pag_especialista.php" method="POST">
        <input type="hidden" name="correo_especialista" value="<?php echo $correo_esp; ?>" width="3" height="3" >
        <input class="botonregresar" value="" type="submit" name="ver">
        </input>  
        </input>
      </form>
        </div>
      </div>
    </div>



    <div class="container-fluid" align="left"></div>
    	
        <div class="row"> 
        	<div class="panel-group">
	            <div class="panel panel-info">
			      <div class="panel-heading">
			      	<?php	printf("%s %s %s , %s años", $row_pers['nombre_col'], $row_pers['apellidouno_col'], $row_pers['apellidodos_col'], $row_edad['edad']);  ?>
			      </div>

			      <div class="panel-body" id="colorletra">
				      <div class="row">
				      	<div class="col-xs-4">
				      		<h5> Celular: <?php  printf ("%s", $row_pers['telpersonal_col'] ); ?> </h5>
				      	</div>
				      	<div class="col-xs-4">
				      		<h5> Correo: <?php  printf ("%s", $row_pers['correo_col'] ); ?> </h5>
				      	</div>
				      	<div class="col-xs-4">
				      		<h5> Celular: <?php  printf ("%s", $row_pers['telpersonal_col'] ); ?> </h5>
				      	</div>
				      </div>
				      <div class="row">
				      	<div class="col-xs-12">
				      		<h5> Dirección: <?php  printf("Calle %s, %s col. %s c.p %s, Del. %s", $row_direc['calle_col'], $row_direc['num_col'], $row_direc['colonia_col'], $row_direc['codpost_col'],$row_direc['delegacion_col']); ?>
							</h5>
				      	</div>
				      </div>				  

			      </div>
			    </div>
			</div>
		</div>


</div> <!-- CONTAINER-->





</body>
</html>