<?php
session_start();
include('rutas.php')
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
        <a href="welcome_admin.php"><img src="imgs/back.svg" width="50px" height=" 50px"> </img></a>
      </div>
    </div>
  </div>

  <div class="container" ">



  <?php
    $id_session = $_SESSION['userid'];
    include("config.php");
    //Declarar Consulta 
      $seleccionar_especialista = "SELECT Persona_tb.nombre_col, Persona_tb.apellidouno_col, Persona_tb.apellidodos_col, Persona_tb.telpersonal_col, Persona_tb.correo_col, Especialista_tb.id_especialista, Especialista_tb.institucioncedula_col
        FROM Persona_tb
        INNER JOIN Especialista_tb
        ON Persona_tb.id_persona = Especialista_tb.id_especialista;";
      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_pacientes\");</script>"; 

    //Query de consulta
      $selec_esp = $conexion->query($seleccionar_especialista);
        
    //numero total de pacientes
      $total_especialistas = mysqli_num_rows($selec_esp);
  ?>

    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">     
          <div class="col-xs-8">
            <div class="input-group">
              <input type="search" class="form-control" id="filtrar" placeholder="Buscar especialista..."></input>
            </div>
          </div>
           <div class="col-xs-4"></div> 
          <br /> </br/>
        </div> <!--div class panel heading-->
           
        <table id="colorletra" class="table table-fixed" >
          <thead>
            <tr style="font-weight:bold" align="center">
              <td class="col-xs-3"><img class="img-thumbnail" src= "imgs/id-card.svg" width="40" height="40" ></img></td> 
              <td class="col-xs-3"><img class="img-thumbnail" src= "imgs/usuario.svg" width="40" height="40" > </img></td>
              <td class="col-xs-3"><img class="img-thumbnail" src="imgs/phone-receiver.svg" width="40" height="40" ></img></td>
              <td class="col-xs-3"><img class="img-thumbnail" src="imgs/escuela.svg" width="40" height="40" ></img></td>
            </tr>
          </thead>
          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_especialistas; $i++){
                $row = mysqli_fetch_array($selec_esp);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td class="col-xs-3" id="colorletra" >
                    <?php  
                      printf( "%s %s %s", $row['nombre_col'], $row['apellidouno_col'], $row['apellidodos_col']); ?>
                  </td>
                  <td class="col-xs-3" id="colorletra"> <?php 
                      printf( "%s", $row['id_especialista']); ?>
                  </td>
                  <td class="col-xs-3" id="colorletra"> <?php 
                      printf( "%s", $row['telpersonal_col']); ?>
                  </td>
                  <td class="col-xs-3" id="colorletra"> <?php
                      printf( "%s", $row['institucioncedula_col']); ?>
                  </td>
                  <td class="col-xs-1" id="colorletra"> 
                    <form action="pag_especialista.php" method="POST">
                    <input type="hidden" name="correo_especialista" value="<?php echo $row['correo_col'] ?>" width="3" height="3" >
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