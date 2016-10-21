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
  <div id ="colorletra" class="container-fluid" align="center">
    <!-- Container (Services Section) -->

    <div class="container-fluid">
      
      <div class="jumbotron text-center">
        <h1 >Dr. Nombre Apellidouno<!--NOMBRE DEL Dr.--> </h1>
        <p>Bienvenido a Chibil</p>
      </div>
      
      <div class="container" style="margin-top:5px;">

      <?php
        include("config.php");
       
        //Declarar Consulta 
        $seleccionar_pacientes = "SELECT nombre_col, apellidouno_col, apellidodos_col, telpersonal_col as 'telefono', correo_col as 'correo'  FROM Persona_tb where id_persona in (SELECT * FROM  Paciente_tb);";
        // $seleccionar_pacientes = SELECT Persona_tb.nombre_col, Persona_tb.apellidouno_col, Persona_tb.apellidodos_col, Persona_tb.telpersonal_col as 'telefono', Persona_tb.correo_col AS 'correo' FROM Persona_tb INNER JOIN Paciente_tb ON  Paciente_tb.id_Paciente = Persona_tb.id_persona ORDER BY Persona_tb.nombre_col;
;

        
        //Query de consulta
        $selec_pac = $conexion->query($seleccionar_pacientes);

        //numero total de pacientes
        $total_pacientes = mysqli_num_rows($selec_pac);

        
       
        
      ?>

        <div class="row">

          <div class="panel panel-default">

            <div class="panel-heading">
                
              <div class="col-xs-4" align="left"><img class="img-thumbnail" src="imgs/user.svg" onmouseover="this.width=55;this.height=55;" onmouseout="this.width=40;this.height=40;" onclick="window.location='Formulario_Registro_Paciente.php'" width="40" height="40"><span>Agregar Nuevo<span></div>  
                <div class="col-xs-4"></div>      
                <div class="col-xs-4"><input type="search" class="form-control" id="usr" placeholder="Buscar paciente..."></input></div>
              <br /> </br/>
            </div> <!--div class panel heading-->
            
            <table id="colorletra" class="table table-fixed">
              <thead>
                <tr style="font-weight:bold" align="center">
                  <td class="col-xs-4"><img class="img-thumbnail" src="imgs/id-card.svg" width="40" height="40" ></img></td> 
                  <td class="col-xs-4"><img class="img-thumbnail" src="imgs/phone-receiver.svg" width="40" height="40" > </img></td>
                  <td class="col-xs-4"><img class="img-thumbnail" src="imgs/email.svg" width="40" height="40" ></img></td>
                </tr>
              </thead>

              <tbody align="center">
              <?php 
                while($row = mysqli_fetch_array($selec_pac)){ ?>
                  <tr>
                                   
                    <td class="col-xs-4" id="colorletra" >
                    <?php  
                    printf( "%s %s %s", $row['nombre_col'], $row['apellidouno_col'], $row['apellidodos_col']);
                      ?>
                    </td>

                    <td class="col-xs-4" id="colorletra"> <?php 
                    printf( "%s", $row['telefono']);
                     ?>
                    </td>

                    <td class="col-xs-4" id="colorletra"> <?php
                    printf( "%s", $row['correo']);
                    ?> <a href="pag_paciente.php"><img src="imgs/eye.svg" height="30" width="30" align="right"> </img> </a>
                    </td>
                    </tr>
              <?php } ?>
              </tbody>
            </table>


          </div> <!-- panel panel-default"> -->
        </div> <!-- div class row-->
      </div> <!-- container //tabla -->
      <?php printf("El total de sus pacientes es %d", $total_pacientes); ?>

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

