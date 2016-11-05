<?php
session_start();

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
          $('#filtrar').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
              $('.buscar tr').hide();
              $('.buscar tr').filter(function () {
                return rex.test($(this).text());
            }).show();
          })
        }(jQuery));
      });
      </script>  
</head>
<body >


<div class="container-fluid" > 
    <div class="row" id="img_paddin">
    <div class="col-xs-12">
      <div class="container-fluid" align="left"> 
        <a href="Bienvenido.php"> <img src="imgs/back.svg" width="50px" height=" 50px"> </img> </a>
      </div>
    </div>
  </div>

  <div class="container" ">



  <?php
    $id_session = $_SESSION['userid'];
    include("config.php");
    //Declarar Consulta 
      $seleccionar_pacientes = "SELECT nombre_col, apellidouno_col, apellidodos_col, telpersonal_col as 'telefono', correo_col as 'correo', id_persona FROM $table_persona WHERE id_persona in (Select id_paciente FROM $table_paciente where Especialista_tb_id_especialista = '$id_session')";
      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_pacientes\");</script>"; 

    //Query de consulta
      $selec_pac = $conexion->query($seleccionar_pacientes);
        
    //numero total de pacientes
      $total_pacientes = mysqli_num_rows($selec_pac);
  ?>

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
              <td class="col-xs-4"><img class="img-thumbnail" src="imgs/id-card.svg" width="40" height="40" ></img></td> 
              <td class="col-xs-4"><img class="img-thumbnail" src="imgs/phone-receiver.svg" width="40" height="40" > </img></td>
              <td class="col-xs-4"><img class="img-thumbnail" src="imgs/email.svg" width="40" height="40" ></img></td>
            </tr>
          </thead>
          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_pacientes; $i++){
                $row = mysqli_fetch_array($selec_pac);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td class="col-xs-4" id="colorletra" >
                    <?php  
                      printf( "%s %s %s", $row['nombre_col'], $row['apellidouno_col'], $row['apellidodos_col']); ?>
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
  </div> <!-- container -->



     
      


</div> <!-- container margin top =5%-->



</body>
</html>

