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
     <script language="JavaScript">
    //Ajusta el tamaño de un iframe al de su contenido interior para evitar scroll
    function autofitIframe(id){
    if (!window.opera && document.all && document.getElementById){
    id.style.height=id.contentWindow.document.body.scrollHeight;
    } else if(document.getElementById) {
    id.style.height=id.contentDocument.body.scrollHeight+"px";
    }
    }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Navbar -->
<div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span data-toggle="modal" data-target="#ModalChibil" id="letrablanca">Chibil</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="botonbarchibil" src="imgs/circuito.svg"></img><span class="caret" style="margin-top: 3px"></span></a>
          <ul class="dropdown-menu">
            <li><a href="log_out.php" >Cerrar sesión</a></li>
            <li><a href="miperfiladmin.php" target="iframe_inicio">Mi perfil</a></li>
            <li><a href="welcome_admin.php" target="iframe_inicio" >Página de Inicio</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>

<div class="site-wrapper">
  <div id ="colorletra" class="container-fluid" align="center" >
    <!-- Container (Services Section) -->
    <div class="container-fluid">
     <!--Jumbotron -->
      <div class="jumbotron text-center" style="margin-top:6%;">
        <div class="container-fluid" align="left">  
        </div><h3> <?php  
                  $id = $_SESSION['userid'];
                  $Consulta_Sexo = "SELECT sexo_col from Persona_tb where id_persona = $id";
                  $res_sex = $conexion->query($Consulta_Sexo);
                  $row_res_sexo = $res_sex->fetch_array(MYSQLI_ASSOC);
                  $row_sexo = $row_res_sexo["sexo_col"];
                     if ($row_sexo == 'F') {
                       # code...
                      echo ''.$_SESSION['user']; 
                      echo '<p>Bienvenida a Chibil</p>';
                     } else {
                      echo ''.$_SESSION['user'];
                      ECHO '<p>Bienvenido a Chibil</p>';
                     }
                    ?></h3>       
      </div> <!--Jumbotron -->

      <div class="row">       
        <div class="col-xs-12" id="colorletra" align="right"> <?php 
            $date = "SELECT DAY(CURDATE()) as 'dia', MONTH(CURDATE()) as 'mes', YEAR(CURDATE()) as 'anio'; ";
            $res_date = $conexion -> query($date);
            $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
            $row_mes = $row_res_date['mes'];

              switch ($row_mes) {
                case 1:
                    $mes='enero';
                    break;
                case 2:
                    $mes='febrero';
                    break;
                case 3:
                    $mes='marzo';
                    break;
                case 4:
                    $mes='abril';
                    break;
                case 5:
                    $mes='mayo';
                    break;
                case 6:
                    $mes='junio';
                    break;
                case 7:
                    $mes='julio';
                    break;
                case 8:
                    $mes='agosto';
                    break;
                case 9:
                    $mes='septiembre';
                    break;
                case 10:
                    $mes='octubre';
                    break;
                case 11:
                    $mes='noviembre';
                    break;
                case 12:
                    $mes='diciembre';
                    break;
   }
            
            echo 'Hoy es '.$row_res_date['dia'].' de '. $mes.' de '.$row_res_date['anio']?>
        </div> 
      </div> 


     <div class="container-fluid">
      <iframe src="welcome_admin.php" name="iframe_inicio" width="100%" height="0" frameborder="0" transparency="transparency" onload="autofitIframe(this);" scrolling="yes"></iframe> 
    </div>

    </div>
  </div>
</div>
     
<footer class="footer">
    <div class="container">
        <p class="text-muted" id="letrablanca" data-toggle="modal" data-target="#ModalInfo" >TT 2015-B118</p>
    </div>
</footer> <!-- Footer-->
  
<!-- Modal INFO -->
<div id="ModalInfo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TT B118</h4>
      </div>
      <div class="modal-body" id="colorletra">
        <p>Este sistema fue desarrollado en la ESCUELA SUPERIOR DE CÓMPUTO del INSTITUTO POLITÉCNICO NACIONAL por:</p>
        <p>Ana Belén González Rodríguez
        <br/>Moisés Abraham Vázquez Pérez</p>
        <p>Para cumplir su finalidad es necesario el uso de la prenda CHIBIL, desarrollada por los mismos alumnos como parte de Trabajo Terminal para titulación</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Gracias</button>
      </div>
    </div>
  </div>
</div>

      <!-- Modal CHIBIL -->
      <div id="ModalChibil" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="colorletra">CHIBIL</h4>
            </div>
            <div class="modal-body" id="colorletra">
              <p> El término epilepsia tiene su origen en la palabra griega “epilambanein” que significa ser atacado o tomado por sorpresa(1). </p> <P>Existen descripciones precisas de las crisis, los sintomas previos, factores desencadenantes y efectos secundarios de las crisis, los cuales son muy parecidos a como los describen en la actualidad</P>
              <p>Para diferentes culturas, como los griegos, era un origen divino, mientras en otras le atribuian un origen religioso, y casi siempre demoniaco, sobre todo en la edad media.</p>
              <p>En México se consideraba a las convulsiones sagradas “citam tamcaz” o “Cancha pahal. Los aztecas englobaban a la epilepsia en el término “enfermedad sacra” y en el Codex Vaticanus B podemos encontrar una bella representación pictográfica.(2)</p>
              <p>En un intento por recordar y dar presencia a las culturas mayas residentes en Mexico, nombramos a este sistema CHIBIL, ya que fueron los mayas quienes nombraban así a la EPILEPSIA. </p>
              <p align="left">(1) http://www.sld.cu/galerias/pdf/sitios/santiagodecuba/epilepsia1.pdf
              <br/>(2) https://encolombia.com/medicina/revistas-medicas/academedicina/va-54/medicina22354medicinaprehispanica/
              </p>
              <img src="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Gracias</button>
            </div>
          </div>
        </div>
      </div>


</body>
</html>

