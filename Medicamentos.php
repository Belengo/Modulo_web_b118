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
 
 
  <div class="container">
      
      <?php
        include("config.php");
        
        $seleccionar_medicamentos = "SELECT * FROM Medicamento_cat";
        $selec_pac = $conexion->query($seleccionar_pacientes);
        $total_pacientes = mysqli_num_rows($selec_pac);
        $row = mysqli_fetch_array($selec_pac, MYSQLI_ASSOC);
        
      ?>

        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Fármacos</h4>
            </div>
            <table id="colorletra" class="table table-fixed">
              <thead>
                <tr style="font-weight:bold" align="center">
                  <td class="col-xs-4">Sustancia Activa</td> 
                  <td class="col-xs-4">Unidades</td>
                  <td class="col-xs-4">Laboratorio</td>
                  <td class="col-xs-4">Presentación</td>
                </tr>
              </thead>

              <tbody align="center">
              <?php 
                for ($i=0;$i<$total_pacientes; $i++){ ?>
                  <tr>
                    <td class="col-xs-4" id="colorletra"> <?php  
                    printf( "%s", $row['NombreCompleto']);
                      ?>
                    </td>

                    <td class="col-xs-4" id="colorletra"> <?php 
                    printf( "%s", $row['telefono']);
                     ?>
                    </td>

                    <td class="col-xs-4" id="colorletra"> <?php
                    printf( "%s", $row['correo']);
                    ?>
                    </td>
                    </tr>
                <?php } ?>
       
              </tbody>
            </table>
          </div>
        </div>
      </div> <!-- container //tabla -->

</div> <!--container-fliud-->
  </div> <!--container-fliud-->
</div><!--Site wrapper-->





<footer class="footer">
    <div class="container-fluid bg-4 text-center">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->
