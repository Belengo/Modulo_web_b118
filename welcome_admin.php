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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>


    <div class="container-fluid" id="container_margin" align="center" > 

      <div class="col-md-4 col-sm-6" >
        <div class="row">
          <div id="ex4">
            <img  src="imgs/doctor.svg" o onclick="window.location='verespecialistas.php'" width="200" height="200"> </img> <p>MÉDICOS</p>
          </div>
        </div>
      </div>
       <div class="col-md-4 col-sm-6">
        <div class="row">
          <div id="ex4">
            <img src="imgs/medical.svg" onclick="window.location='medicamentos_admin.php'" width="200" height="200"> </img> <p>FÁRMACOS</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="row">
          <div id="ex4">
            <img src="imgs/admin_t.svg" onclick="window.location='miperfil_admin.php'" width="200" height="200"> </img> <p>MI PERFIL</p>
          </div>
        </div>
      </div>

    </div>
    </div>  <!-- class container-fluid tet center-->


</body>
</html>