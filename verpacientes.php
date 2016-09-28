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

<form action="nverpacientes.php" method="get">

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
  <div class="container" >
    <div id="upmenu">
      <a href="verpacientes.php"> Mis Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
 
 
  <div height="600px" class="container">
  <h1> </h1>
  </div>
      
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Pacientes</h4>
        </div>
        <table id="colorletra" class="table table-fixed">
          <thead>
            <tr style="font-weight:bold">
              <td class="col-xs-4">Nombre</td> 
              <td class="col-xs-4">Telefono</td>
              <td class="col-xs-4">Correo</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-4"><a id="colorletra" href="pag_paciente.php">Nombre Apellidouno Apellido2</a></td>
              <td class="col-xs-4">55555555</td>
              <td class="col-xs-4">correo1@gmail.com</td>
            </tr>
            <tr>
              <td class="col-xs-4">Nombre Apellidouno Apellido2</td>
              <td class="col-xs-4">55555555</td>
              <td class="col-xs-4">correo1@gmail.com</td>
            </tr>
            <tr>
              <td class="col-xs-4">Nombre Apellidouno Apellido2</td>
              <td class="col-xs-4">55555555</td>
              <td class="col-xs-4">correo1@gmail.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
   </div>
  <div class="container" align="center">
  </div>
</div>





<footer class="footer">
    <div class="container">
        <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->

</body>
</html>

