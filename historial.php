
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
<nav class="navbar navbar-default">
 	<div class="container">
 	 	<div class="row">
	 		<div class="navbar-header">
	     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	      		<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>                        
	     		</button>
	     	</div>
   		     
	        <div class="collapse navbar-collapse" id="myNavbar">         
	     		<ul class="nav navbar-nav navbar-right">
	                <li style="font-size: 12px; margin-top: 3px;">
	     				<a href="index.php" >
	     				<span id="colorletra" style="margin-top:3px;"><img src="linkedinsquare.png"></span> <h7 id="colorletra"> </h7></a> </img>
	                </li>
	            </ul><!-- /ul nav bar-->
              <div align="center" > 
                <h2 align="center" id="colorletra">Dr. Nombre ApellidoMa ApellidoPa</h2> </div>
	   	    </div>  <!-- div class="collapse navbar-collapse" -->.
    	</div>
    </div>
</nav> 



<div class="site-wrapper">
 	<div class="container" >
 	 	<h1 id="colorletra">  </h1>
       </div>

	 <div class="container" >
		<div id="upmenu">
                <a href="verpacientes.php"> Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</div>


   <div class="container" align="center">
      <h3 id="colorletra"> Historial </h3>

      <h7 id="colorletra">
       <table id="tabla" align="center" margin-top="center" >
        <br>
             <tr>
                <th id="tth"> </th>
                <th id="tth"><h4><img src="ver.png"></h4></th>
                <th id="tth"><h4>Fecha</h4></th>
             </tr>

             <tr>
                <th id="tth"><a href="Paciente.php" id="colorletra">Ver</a></th>
                <th id="tth"><img src="ver.png"></th>
                <th id="tth">00/00/00</th>
              </tr>



      </br>
      </h7>
     </table>
    
   </div> 





</div>


	









<!-- Comienza php-->

<?php




?>

<!-- Termina php-->


</body>
</html>
								