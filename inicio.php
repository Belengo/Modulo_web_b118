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
    //Ajusta el tamaño del iframe al de su contenido interior para evitar scroll
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
<nav class="navbar navbar-inverse">
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
            <li><a href="log_out.php">Cerrar sesión</a></li>
            <li><a href="miperfil.php">Mi perfil</a></li>
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
      <div class="jumbotron text-center">
        <div class="container-fluid" align="left"><a href="Logo.png"></a>  
        </div><h3> <?php  
                  $id = $_SESSION['userid'];
                  $Consulta_Sexo = "SELECT sexo_col from Persona_tb where id_persona = $id";
                  $res_sex = $conexion->query($Consulta_Sexo);
                  $row_res_sexo = $res_sex->fetch_array(MYSQLI_ASSOC);
                  $row_sexo = $row_res_sexo["sexo_col"];
                     if ($row_sexo == 'F') {
                       # code...
                      echo 'Dra. '.$_SESSION['user']; 
                      echo '<p>Bienvenida a Chibil</p>';
                     } else {
                      echo 'Dr. '.$_SESSION['user'];
                      ECHO '<p>Bienvenido a Chibil</p>';
                     }
                    ?></h3>       
      </div>

      <div class="row">       
        <div class="col-xs-12" id="colorletra" align="right"> <?php 
            $date = "SELECT CURDATE() as 'fecha'";
            $res_date = $conexion -> query($date);
            $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
            $fecha_actual = $row_res_date['fecha'];
            
            echo 'Fecha: '.$fecha_actual; ?>
        </div> 
      </div> 

     <div class="container-fluid">
      <iframe src="Bienvenido.php" name="iframe_inicio" width="100%" height="0" frameborder="0" transparency="transparency" onload="autofitIframe(this);"></iframe> 
    </div>
     

      <footer class="footer">
          <div class="container-fluid text-center" id="letrablanca">
              <p class="text-muted" id="letrablanca">TT 2015-B118</p>
          </div>
      </footer> <!-- Footer-->


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

