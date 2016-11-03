<?php session_start();
include("config.php");
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

     
<div clas="container" style="margin-top:5px">   
  <div class="container" ">
  <?php
        $id_pac = $_SESSION['paciente']; 
        //$correo_pac = $_POST['correo_paciente']; 
          $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
    

    
    //Declarar Consulta 
      $seleccionar_receta = "SELECT fecha_col as 'fecha' FROM $table_tratamiento WHERE Paciente_tb_id_Paciente = $id_pac";
      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_receta\");</script>"; 

    //Query de consulta
      $selec_recet = $conexion->query($seleccionar_receta);
        
    //numero total de pacientes
      $total_recetas = mysqli_num_rows($selec_recet);
  ?>

    <div class="row" style="margin-top: 5%;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="col-xs-4" align="left"><span>Historial Recetas<span>
          </div>  
          <div class="col-xs-4"></div>      
          <div class="col-xs-4">
            
          </div>
          <br /> </br/>
        </div> <!--div class panel heading-->
        <div class="table-responsive"> 
        <table id="colorletra" class="table" >
          <thead>
            <tr style="font-weight:bold" align="center">
              <td class="col-xs-4"><img class="img-thumbnail" src="imgs/calendario.svg" width="40" height="40" ></img></td> 
            </tr>
          </thead>
          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_recetas ; $i++){
                $row = mysqli_fetch_array($selec_recet);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td class="col-xs-4" id="colorletra" >
                   <?php
                       printf("%s", $row['fecha']);
                   ?>
                  </td>
                  <td class="col-xs-1" id="colorletra"> 
                    <form action="receta.php" method="POST">
                    <input type="hidden" name="correo_paciente" value="<?php echo $row['fecha'] ?>" width="3" height="3" >
                    <input class="botonver_mas" value="" type="submit" name="ver"></input>  
                    </input>
                    </form> 
                  </td>
                  
                  
                </tr>
            <?php } ?>
          </tbody>
        </table>
        </div>
      </div> <!-- panel panel-default"> -->
    </div> <!-- div class row-->
  </div> <!-- container -->
         

        <div class="row">
            <div class="col-xs-12">
                <div class="container-fluid" align="right"> 
                    <form action="pag_paciente.php" method="POST">
                    <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo'] ?>" width="3" height="3" >
                    <input class="botonregresar" value="" type="submit" name="ver">
                    </input>  
                    </input>
                    </form>
                </div>
            </div>
        </div>

    </div><!--div class container-fluid -->
</div>     

      
    </div> <!--class="container-fluid" align="center"> -->
  </div> <!--<div class="container-fluid"-->
</div> <!--div class site-wrapper-->



<footer class="footer">
  <div class="container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer>


<!-- Comienza php-->


