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
  <div id ="colorletra" class="container-fluid" align="center">
    <div class="container-fluid">
      
      <div class="jumbotron text-center">
        <h1 >Dr. Nombre Apellidouno<!--NOMBRE DEL Dr.--> </h1>
        <p>Bienvenido a Chibil</p>
      </div>

      <div class="container" >
        <div id="upmenu">
          <a href="vestible.php"> Vestible </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="historiaclinica.php"> Historia Clínica  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="receta.php"> Recetas </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </div>

      <div class="container-fluid">
      
        <div class="container" id="colorletra">
        <form action="histor_temp.php" method="POST"> <!--action form-->
          <h2>Historia Clínica</h2>
          <ul class="nav nav-tabs" id="colorletra">
            <li class="active"><a data-toggle="tab" href="#Datos" id="colorletra">Paciente</a></li>
            <li><a data-toggle="tab" href="#Diagnostico" id="colorletra">Diagnóstico</a></li>
            <li><a data-toggle="tab" href="#Heredo-Familiares" id="colorletra">Antecedentes Heredo-Familiares</a></li>
            <li><a data-toggle="tab" href="#Patologicos" id="colorletra">Antecedentes Patológicos</a></li>
            <li><a data-toggle="tab" href="#Nopatologicos" id="colorletra">Antecedentes No patológicos</a></li>
            <li><a data-toggle="tab" href="#Alergias" id="colorletra">Alergias</a></li>
          </ul>  

        <div class="tab-content">
          
          <div id="Datos" class="tab-pane fade in active" align="left">
            <h3>Nombre Paciente</h3>
            <h6>Nombre:</h6>
            <h6>Edad:</h6>
            <h6>Dx Actual:</h6>
          </div>
          

          <div id="Diagnostico" class="tab-pane fade">
            <div class="col-xs-12"><h3>Diagnostico</h3></div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtMotivo">Motivo de la consulta:</label>
                <textarea class="form-control" rows="5" id="txtMotivo"></textarea>
              </div>
              <div class="form-group">
                  <label for="txtPadecimiento">Exploración neurológica:</label>
                  <textarea class="form-control" rows="5" id="txtCrisisTipo"></textarea>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                  <label for="txtPadecimiento">Padecimiento actual:</label>
                  <textarea class="form-control" rows="5" id="txtPadecimiento"></textarea>
              </div>
              <div class="form-group">
                  <label for="txtPadecimiento">Tipo de crisis:</label>
                  <textarea class="form-control" rows="5" id="txtCrisisTipo"></textarea>
              </div>
            </div>
          </div>

          <div id="Patologicos" class="tab-pane fade">
            <div class="col-xs-12"><h3>Antecedentes patológicos</h3></div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtCirugias">Cirugías:</label>
                <textarea class="form-control" rows="5" id="txtCirugias"></textarea>
              </div>
              <div class="form-group">
                <label for="txtAlergiasanti">Hospitalizaciones:</label>
                <textarea class="form-control" rows="5" id="txtAlergiasanti"></textarea>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtTransfusiones">Traumatismos:</label>
                <textarea class="form-control" rows="5" id="txtTransfusiones"></textarea>
              </div>
              <div class="form-group">
                <label for="txtTransfusiones">Transfusiones:</label>
                <textarea class="form-control" rows="5" id="txtTransfusiones"></textarea>
              </div>
            </div> <!--div col-xs-6-->
          </div>

          <div id="Heredo-Familiares" class="tab-pane fade">
            <div class="col-xs-12"><h3>Antecedentes Heredo-Familiares</h3></div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtCancer">Cáncer:</label>
                <textarea class="form-control" rows="5" id="txtAlergias"></textarea>
              </div>
              <div class="form-group">
                <label for="txtCerebrovasculares">Enfermedades Cerebrovasculares:</label>
                <textarea class="form-control" rows="5" id="txtAlergiasanti"></textarea>
              </div>
              <div class="form-group">
                <label for="txtTranstornosNeurológicos">Transtornos neurológicos:</label>
                <textarea class="form-control" rows="5" id="txtTranstornosNeurológicos"></textarea>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtRespiratorias">Enfermedades respiratorias:</label>
                <textarea class="form-control" rows="5" id="txtRespiratorias"></textarea>
              </div>
              <div class="form-group">
                <label for="txtDiabetes">Diabetes:</label>
                <textarea class="form-control" rows="5" id="txtDiabetes"></textarea>
              </div>
              <div class="form-group">
                <label for="txtHipertension">Hipertension:</label>
                <textarea class="form-control" rows="5" id="txtHipertension"></textarea>
              </div>
              </div>
            </div>
          

          <div id="Nopatologicos" class="tab-pane fade">
            <div class="col-xs-12"><h3>Antecedentes No patologícos</h3></div>
            <div align="left">
              <div class="checkbox">
                <label><input type="checkbox" value="Tabaquismo">Tabaquismo</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="Alcoholismo">Alcoholismo</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="Drogas" >Drogas</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="Drogas" >Inmunizaciones</label>
              </div>
            </div>
            <div class="form-group" align="left">
              <label for="txtOtros" >Otros:</label>
              <textarea class="form-control" rows="3" id="txtAlergias"></textarea>
            </div>
          </div>

          <div id="Alergias" class="tab-pane fade">
            <div class="col-xs-12"><h3>Alergias</h3></div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtAlergiasAntiepilepticos">Antiepilépticos:</label>
                <textarea class="form-control" rows="5" id="txtAlergias"></textarea>
              </div>
              <div class="form-group">
                <label for="txtAlergiasMedicamentos">Otros medicamentos:</label>
                <textarea class="form-control" rows="5" id="txtAlergiasanti"></textarea>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="txtAlergiasAlimentos">Alimentos:</label>
                <textarea class="form-control" rows="5" id="txtAlergias"></textarea>
              </div>
              <div class="form-group">
                <label for="txtAlergiasTopicos">Sustancias Tópicas:</label>
                <textarea class="form-control" rows="5" id="txtAlergiasanti"></textarea>
              </div>
            </div>
          </div>

        </div> <!--Div class tab-content-->
      </div> <!--Div class container-->
      </div><!--div class container-fluid -->
         
      <div class="row" id="border" style="margin-top: 10%;">
        <div class="col-xs-3"></div>
        <div class="col-xs-3">
          <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificar" type="submit">Modificar</button>
        </div> 
        <div class="col-xs-3">
          <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarConsulta" type="submit">Guardar </button>
        </div> 
        <div class="col-xs-3"></div>
      </div>
      </form>

      
    </div> <!--class="container-fluid" align="center"> -->
  </div> <!--<div class="container-fluid"-->
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
        include("./captura_histo_clinic.php");

        $alergias = getAlergia();
        $antecedentes = getAntecedentes();
        $cirugias = getCirugias();
        $notas = getNotas();

        //Generar el id de Historia Clínica
        $idh = mysqli_query($conexion, "SELECT COUNT(Id_HistoClini) FROM $table_historiaclinica");
        $date ="SELECT DATE(NOW())";
        $conexion -> query($date);

        mysqli_query($conexion, "INSERT INTO $table_historiaclinica (Id_HistoClini, fecha, alergias, antecedentesMedicos, cirugias, paciente_tb_id_Persona, notas_col) VALUES ('$idh','$date','$alergias', '$antecedentes', '$cirugias','$idh','$notas')");



        

    }



?>
