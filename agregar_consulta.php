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
    <link href="flaticon.css" rel="stylesheet1">
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
  <div class="container"> </div>
    <div class="container" >
        <div id="upmenu">
            <a href="verpacientes.php"> Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    
<div class="container" > <h4>  </h4> </div>
    <div class="container" >
        <div id="upmenu">
        <a href="vestible.php"> Vestible </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="historiaclinica.php"> Historia Clínica  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="consulta.php" style="visibility:hidden;">Consultas</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

    <div class="container-fluid">
        <form action="agregar_consulta.php" method="POST">    <!--action form--> 
            <div class="row">

                <div class="form-group" id="colorletra"><h1>Agregar Consulta</h1></div>
                
                <div class="col-xs-6">
                    <div align="left" class="form-group"> <!-- PESO-->
                        <label id="colorletra" for="peso">PESO</label>
                        <input type="text" class="form-control" name="txtpESO" placeholder="Peso (KG)">
                    </div> <!-- PESO-->
                    <div align="left" class="form-group"> <!--PRESION-->
                        <label id="colorletra" for="presion">PRESION</label>
                        <input type="text" class="form-control" name="txtPresion" placeholder="Presion (DDD/SSS)">
                    </div> <!-- PRESION-->
                    <div align="left" class="form-group"> <!--FREC. CARDIACA-->
                        <label id="colorletra" for="frecuencia">FECUENCIA CARDIACA</label>
                        <input type="text" class="form-control" name="txtFrecuencia" placeholder="Frecuencia Cardiaca PPP (/min)">
                    </div> <!-- FREC.CARDIACA-->
                    <div align="left" class="form-group"> <!--TEMPERATURA-->
                        <label id="colorletra" for="temperatura">TEMPERATURA</label>
                        <input type="text" class="form-control" name="txtTemperatura" placeholder="Temperatura (ºC)">
                    </div> <!--TEMPERATURA-->
                </div>

                <div class="col-xs-6">
                    <div align="left" class="form-group"> <!--ANOTACIONES-->
                        <label id="colorletra" for="comentarios" >COMENTARIOS</label>
                        <textarea class="form-control" rows="6" name="txtComentarios" placeholder="Comentarios" style="height:250px; "> </textarea>
                    </div> <!--ANOTACIONES-->
                </div>

            </div>

            <div class="col-xs-4"></div>
                <div class="col-xs-4"><button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarConsulta" type="submit">Guardar Consulta</button></div> <div class="col-xs-4"></div>
        </form>
    </div><!--div class container-fluid -->

  </div> <!--div class container-->
</div> <!--div class site-wrapper-->



<footer class="footer">
  <div class="container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer>


<!-- Comienza php-->

<?php
    if (isset($_POST["btnGuardarConsulta"])) {
        # code...
        include("config.php");
        include("captura_consulta.php");

        $peso = getPeso();
        $presion = getPresion();
        $frecuencia = getFrecuencia();
        $temperatura = getTemperatura();

        mysqli_query($conexion, "INSERT INTO $table_consulta (id_persona, peso_col, presion_col, frecuencia_col, temperatura_col) VALUES ('$id','$peso', '$presion', '$frecuencia', '$temperatura')");

    }



?>

<!-- Termina php-->

