<?php
 session_start();
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
               		
	     				<a href="index.php" >
	     				<span id="colorletra" style="margin-top:3px;"><img src="linkedinsquare.png"></span> </a> </img>
	                
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
      <div class="col-md-4 col-sm-6">
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
          <img class="img-thumbnail" src="imgs/medica.svg" onmouseover="this.width=250;this.height=250;" onmouseout="this.width=200;this.height=200;" width="200" height="200"> </img>
        </div>
        <div class="row">
          <span>MI PERFIL</span>
        </div>
      </div>
    </div>  <!-- class container-fluid tet center-->
  </div> <!-- class container fluid color letra-->
</div> <!-- div site wrapper-->


<footer class="footer">
    <div class="container">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->



<!--comienza js-->


<!-- Termina js-->

<!-- Comienza php-->

<?php




?>

<!-- Termina php-->


</body>
</html>
								