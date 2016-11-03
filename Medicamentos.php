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
                  
              </ul><!-- /ul nav bar-->
      </div>  <!-- div class="collapse navbar-collapse" -->
    </div> <!-- div class="container" -->
</nav>

 

<div class="site-wrapper">
  <div id ="colorletra" class="container-fluid" align="center">
    <!-- Container (Services Section) -->

    <div class="container-fluid">
      
      <div class="jumbotron text-center">
        <h1 >Dr. Nombre Apellidouno<!--NOMBRE DEL Dr.--> </h1>
        <p>Bienvenido a Chibil</p>
      </div>

<div clas="container" style="margin-top:5px">   
  <div class="container" ">
  <?php
    $id_session = $_SESSION['userid'];
    include("config.php");
    //Declarar Consulta 
    $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_pacientes\");</script>"; 

    //Query de consulta
      $selec_med = $conexion->query($seleccionar_medicamentos);
        
    //Numero total de pacientes
      $total_medicamentos = mysqli_num_rows($selec_med);
  ?>

    <div class="row" style="margin-top: 5%;">
      <div class="panel panel-default">
        <div class="panel-heading">
           
               
          <div class="col-xs-6">
            <input type="search" class="form-control" id="filtrar" placeholder="Buscar medicamento..."></input>
          </div>
          <br /> </br/>
        </div> <!--div class panel heading-->
           
        <table id="colorletra" class="table table-fixed" >
          <thead>
            <tr style="font-weight:bold" align="center">
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/sust-activa.svg" width="40" height="40" ></img></td> 
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/nombre-medic.svg" width="40" height="40" > </img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/forma-farma1.svg" width="40" height="40" ></img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/presentacion.svg" width="40" height="40" ></img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/laboratorio.svg" width="40" height="40" ></img></td>
            </tr>
            <tr align="center">
              <td class="col-xs-2">Sustancia Activa</td> 
              <td class="col-xs-2">Nombre</td>
              <td class="col-xs-2">Forma Farmacéutica</td>
              <td class="col-xs-2">Presentación</td>
              <td class="col-xs-2">Laboratorio</td>
            </tr>
          </thead>

          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_medicamentos; $i++){
                $row = mysqli_fetch_array($selec_med);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td class="col-xs-4" id="colorletra" >
                    <?php  
                      printf( "%d", $row['Nombremedicamento_cat_id_Nombremedicamento']);
                    ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php 
                      printf( "%d", $row['sustanciaActiva_cat_id_sustanciaActiva']); ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php
                      printf( "%d", $row['Formafarmaceutica_cat_id_formafarmaceutica']); ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php
                      printf( "%d", $row['Presentacionmedic_cat_id_Presentacionmedic']); ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php
                      printf( "%d", $row['Laboratorio_cat_id_laboratorio']); ?>
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div> <!-- panel panel-default"> -->
    </div> <!-- div class row-->
  </div> <!-- container -->
     
      
  <div class="row">
    <div class="col-xs-12">
      <div class="container-fluid" align="right"> 
        <a href="Bienvenido.php"> <img src="imgs/back.svg" width="50px" height=" 50px"> </img> </a>
      </div>
    </div>
  </div>

</div> <!-- container margin top =5%-->

    </div> <!--container-fliud-->
  </div> <!--container-fliud-->
</div><!--Site wrapper-->





<footer class="footer">
    <div class="container-fluid bg-4 text-center">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->


</body>
</html>



<!--

//Medicamento
$catalog_medicamento = "Medicamento_cat";
$catalogo_nombremedicamento = "Nombremedicamento_cat";
$catalogo_laboratorio = "Laboratorio_cat";
$catalgono_sustanciaActiva = "SustanciaActiva_cat";
$catalgono_formaFarmaceutica = "Formafarmaceutica_cat";
$catalogo_presentacion = "Presentacionmedic_cat";
  //presentacionmedic
  $catalogo_empaque = "Empaque_cat";
  $catalogo_cantidad = "Cantidad_cat";
  $catalogo_presentacion = "Presentacion_cat";
  $catalogo_unidades = "Unidades_cat";
 -->
