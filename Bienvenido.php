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
        <a class="navbar-brand" href="#" id="colorletra">Chibil</h5></a>
     	</div>
   		     
        <div class="collapse navbar-collapse" id="myNavbar">
            
     			<ul class="nav navbar-nav navbar-right">
            	<li><a href="log_out.php" >Cerrar Sesión</li>
	     				<span id="colorletra" style="margin-top:3px;"><img src="linkedinsquare.png"></span> </a> </img>
	                
            	</ul><!-- /ul nav bar-->
   		</div>  <!-- div class="collapse navbar-collapse" -->
    </div> <!-- div class="container" -->
</nav> 





<div class="site-wrapper">
  <div id ="colorletra" class="container-fluid" align="center" >
    <!-- Container (Services Section) -->
    <div class="container-fluid">
      <div class="jumbotron text-center">
        <div class="container-fluid" align="left"><a href="Logo.png"></a> </div>
        <h3> <?php  
                  $id = $_SESSION['userid'];
                  $Consulta_Sexo = "SELECT sexo_col from Persona_tb where id_persona = $id";
                  $res_sex = $conexion->query($Consulta_Sexo);
                  $row_res_sexo = $res_sex->fetch_array(MYSQLI_ASSOC);
                  $row_sexo = $row_res_sexo["sexo_col"];
                     if ($row_sexo == 'F') {
                       # code...
                      echo 'Dra. '.$_SESSION['user']; 
                      echo '<p>Bienvenida a Chibil</p>';
                     } else {
                      echo 'Dr. '.$_SESSION['user'];
                      ECHO '<p>Bienvenido a Chibil</p>';
                     }
                    ?>
        </h3>
        
      </div>
      <div class="row">       
      <div class="col-xs-12" id="colorletra" align="right"> <?php 
          $date = "SELECT CURDATE() as 'fecha'";
          $res_date = $conexion -> query($date);
          $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
          $fecha_actual = $row_res_date['fecha'];
          
          echo 'Fecha: '.$fecha_actual; ?></div> 
     </div> 
    <div id="paddin">
      <div class="col-md-4 col-sm-6" >
        <div class="row">
          <img class="img-thumbnail" src="imgs/pacientes.svg" onmouseover="this.width=250;this.height=250;" onmouseout="this.width=200;this.height=200;" onclick="window.location='verpacientes.php'" width="200" height="200"> </img> </a>
        </div>
        <div class="row">
          <span>PACIENTES</span>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="row">
          <img class="img-thumbnail" src="imgs/farmacos.svg" onmouseover="this.width=250;this.height=250;" onmouseout="this.width=200;this.height=200;" onclick="window.location='Medicamentos.php'" width="200" height="200"> </img>
        </div>
        <div class="row">
          <span>FÁRMACOS</span>
         </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="row">
          <img class="img-thumbnail" src="imgs/medica.svg" onmouseover="this.width=250;this.height=250;" onmouseout="this.width=200;this.height=200;" onclick="window.location='miperfil.php'" width="200" height="200"> </img>
        </div>
        <div class="row">
          <span>MI PERFIL</span>
        </div>
      </div>
    </div>
    </div>  <!-- class container-fluid tet center-->
  </div> <!-- class container fluid color letra-->
</div> <!-- div site wrapper-->


<footer class="footer">
    <div class="container-fluid bg-4 text-center">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->



</body>
</html>
								