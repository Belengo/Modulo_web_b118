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
        <form action="histor_temp.php" method="POST">    <!--action form--> 
            <div class="row">

                <div class="form-group" id="colorletra"><h1>Historia Clínica</h1></div>
                
                <div class="col-xs-6">
                    <div align="left" class="form-group"> <!--Begin-->
                        <label id="colorletra" for="peso">Alergias:</label>
                    </div> <!--ends-->

                    <div align="left" class="form-group"> <!--Begin-->
                        <textarea class="form-control"  name="txtAlergia" style="height:250px;" placeholder="Alergias" cols="5"> </textarea>
                    </div> <!--ends-->

                    <div align="left" class="form-group"> <!---->
                        <label id="colorletra" for="presion">Antecedentes médicos</label>
                    </div> <!--ends-->

                    <div align="left" class="form-group"> <!--Begin-->
                        <textarea class="form-control"  name="txtAntecedentes" placeholder="Antecedentes" style="height:250px; "> </textarea>
                    </div> <!--ends-->
                   
                </div> <!-- div class col-xs-6-->

                <div class="col-xs-6">
                 

                    <div align="left" class="form-group"> <!--Begin-->
                        <label id="colorletra" for="frecuencia">Cirugías</label>
                    </div> <!--ends-->

                    <div align="left" class="form-group"> <!--Begin-->
                        <textarea class="form-control"  name="txtCirugias" placeholder="Cirugías" style="height:250px; "> </textarea>
                    </div> <!--ends-->

                    <div align="left" class="form-group"> <!--Begin-->
                        <label id="colorletra" for="temperatura">Notas</label>
                    </div> <!--ends-->  

                    <div align="left" class="form-group"> <!--Begin-->
                        <textarea class="form-control"  name="txtNotas" placeholder="" style="height:250px; "> </textarea>
                    </div> <!--ends-->

                </div> <!--div col-xs-6-->

            </div> <!-- div row-->

                <div class="col-xs-3"></div>
                <div class="col-xs-3"><button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificar" type="submit">Modificar</button></div> 
                <div class="col-xs-3"><button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarConsulta" type="submit">Guardar </button></div> 
                <div class="col-xs-3"></div>
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
        include("captura_histo_clinic.php");

        $alergias = getAlergia();
        $antecedentes = getAntecedentes();
        $cirugias = getCirugias();
        $notas = getNotas();

        //Generar el id de Historia Clínica
        $idh = mysqli_query($conexion, "SELECT COUNT(Id_HistoClini) FROM $table_historiaclinica");
        $date = mysqli_query($conexion, "SELECT DATE(NOW())");

        mysqli_query($conexion, "INSERT INTO $table_historiaclinica (Id_HistoClini, fecha, alergias, antecedentesMedicos, cirugias, paciente_tb_id_Persona, notas_col) VALUES ('$idh','$date','$alergias', '$antecedentes', '$cirugias','$idh','$notas')");



        

    }



?>
