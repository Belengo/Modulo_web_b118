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
        $id_session = $_SESSION['userid'];
        $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
        //$correo_pac = $_POST['correo_paciente']; 
          $vestible_id = "SELECT Vestible_cat_idVestible_cat FROM $table_paciente WHERE id_paciente='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_vestible_id = $conexion->query($vestible_id);
          $row_res_vestible_id  = $res_vestible_id ->fetch_array(MYSQLI_ASSOC);
          
          //Declarar Consulta 
            $seleccionar_bitacoras = "SELECT *  FROM Bitacora_tb WHERE Vestible_cat_idVestible_cat group by fecha_col order by fecha_col;";
            //echo "<script type=\"text/javascript\">alert(\"$seleccionar_pacientes\");</script>"; 

          //Query de consulta
            $selec_bitacora= $conexion->query($seleccionar_bitacoras);
              
          //numero total de pacientes
            $total_bitacoras = mysqli_num_rows($selec_bitacora);
  ?>

<div class="container-fluid">
  <div class="container">

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="pag_paciente.php" method="POST">
	        <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo']; ?>" width="3" height="3" >
	        <input class="botonregresar" VALUE="" type="submit" name="ver">
	        </input>  
	        </input>
      	  </form>
        </div>
      </div>
    </div>

      <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="col-xs-4" align="left"><img class="img-thumbnail" src="imgs/user.svg" onmouseover="this.width=55;this.height=55;" onmouseout="this.width=40;this.height=40;" onclick="window.location='Formulario_Registro_Paciente.php'" width="40" height="40"><span>Nuevo<span>
          </div>  
          <div class="col-xs-4"></div>      
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
              <td> </td>
              <td class="col-xs-4"><img class="img-thumbnail" src= "imgs/calendario.svg" width="40" height="40" ></img></td> 
              <td class="col-xs-4"><img class="img-thumbnail" src= "imgs/clock.svg" width="40" height="40" > </img></td>
              <td class="col-xs-4"><img class="img-thumbnail" src="imgs/brain-1.svg" width="40" height="40" ></img></td>
            </tr>
          </thead>
          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_bitacoras; $i++){
                $row = mysqli_fetch_array($selec_bitacora);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td>
                    <div class="col-xs-6">
                      <form action="verpacientes.php" method="POST">
                      <input type="hidden" name="correo_paciente" value="<?php echo $row['correo'] ?>" width="3" height="3" >
                      <input class="btneli" value="" type="submit" name="ver"></input>  
                      </input>
                      </form> 
                    </div>
                  </td>
                  <td class="col-xs-4" id="colorletra" >
                    <?php  
                      printf( "%s ", $row['fecha_col']); ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php 
                      printf( "%s", $row['telefono']); ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php
                      printf( "%s", $row['correo']); ?>
                  </td>

                  <td class="col-xs-1" id="colorletra"> 
                    
                    <form action="pag_paciente.php" method="POST">
                    <input type="hidden" name="correo_paciente" value="<?php echo $row['correo'] ?>" width="3" height="3" >
                    <input class="botoncontacto" value="" type="submit" name="ver"></input>  
                    </input>
                    </form> 
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div> <!-- panel panel-default"> -->
    </div> <!-- div class row-->


  </div>
</div>