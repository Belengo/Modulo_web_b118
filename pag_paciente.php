<?php

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
  <div class="container">
    <div id="upmenu">
    </div>
</div>
  
  <div class="container" >
    <div id="upmenu">
      <a href="verpacientes.php"> Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>
    
    <div class="container" >
    </div>

	 <div class="container" >
		<div id="upmenu">
		<a href="vestible.php"> Vestible </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="historiaclinica.php"> Historia Clínica  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="receta.php"> Recetas </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</div>

    
 		
    <div class="row" id="colorletra">
 			  <div class="col-xs-3" > Nombre Paciente: 

        <!-- <?php 
        /* include(config.php)
         $nombre_pac = "SELECT nombre_col FROM paciente_tb WHERE id_paciente= $idpac"
        

        */
        ?> -->
        </div>
        <div class="col-xs-3"> Tipo de crisis:
        </div>
        <div class="col-xs-3"> Alergias antipilépticos: 
        </div>
    </div>

 	

    <div class="row"> 
      <div class="col-xs-4"></div>
      <div class="col-xs-4" id="tth" style="margin-top:10%;" > <h7 id="colorletra"><p >Dx. Breve descripción del diagnóstico (o el último guardado.) </p></h7> 
      </div>
      <div class="col-xs-4"></div>
      <div class="col-xs-4"></div>
    </div>

    <div class="row"> 
      <div class="col-xs-4"></div>
      <div class="col-xs-4" id="tth" style="margin-top:5%;" > <h7 id="colorletra"><p> TRATAMIENTO ACTUAL</p></h7> 
      </div>
      <div class="col-xs-4"></div>
      <div class="col-xs-4"></div>
    </div>

    <div class="row"> 
      <div class="col-xs-4"></div>
      <div class="col-xs-4" id="tth" style="margin-top:5%;" > <h7 id="colorletra"><p> COMBINACIONES DE TRATAMIENTOS PREVIOS</p></h7> 
      </div>
      <div class="col-xs-4"></div>
      <div class="col-xs-4"></div>
    </div>

 </div> <!-- class="site-wrapper"-->


<footer class="footer">
    <div class="container">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
  	</div>
</footer>

</body>
</html>
