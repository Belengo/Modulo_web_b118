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
<body >

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>



<<!-- Navbar -->
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
  <div class="container" >
    </div>

    <div class="container" >
        <div id="upmenu">
            <a href="verpacientes.php"> Mis Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <a href="consulta.php">Consultas</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="receta.php"> Recetas </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    
    

  <div class="container">
        
    
    <div align="left">
    <table  width="100%" id="colorletra">
        
        <th><h4 id="colorletra">Paciente: Nombre ApellidoP ApellidoM </h4></th>
        <th>Edad</th>
        <th id="tth">&nbsp;&nbsp;&nbsp;&nbsp; Dx&nbsp;&nbsp;</th>
        
        
    </table>
  </div>

    <div class="container">
        <div class="container" style="margin-top:10%;" width=50%>
        <table align="center">
        <br>
        <td></td>
        <td><form action="agregar_consulta.php">
        <input id="colorletra" type="submit" name= "Agre_consulta" value="Agregar consulta" required="true"></input></form></td>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td><form action="historial_consulta.php">
        <input id="colorletra" type="submit" name= "histo_consulta" value="Ver historial consultas" required="true"></input></form></td>
        <br>
        </table>
        </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer>


<!-- Comienza php-->

<?php




?>

<!-- Termina php-->


</body>
</html>