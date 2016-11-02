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
<!--sCRIPT QUE ESTA EN ESPERA DE LO QUE SE ESCRIBE -->
    <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {    
                //Al escribir dentro del input con id="service"
                $('#service').keypress(function(){
                    //Obtenemos el value del input
                    var service = $(this).val();        
                    var dataString = 'service='+service;
                    //Le pasamos el valor del input al ajax
                    $.ajax({
                        type: "POST",
                        url: "receta.php",
                        data: dataString,
                        success: function(data) {
                            //Escribimos las sugerencias que nos manda la consulta
                            $('#suggestions').fadeIn(1000).html(data);
                            //Al hacer click en algua de las sugerencias
                            $('.suggest-element').live('click', function(){
                            //Obtenemos la id unica de la sugerencia pulsada
                                var id = $(this).attr('id');
                                //Editamos el valor del input con data de la sugerencia pulsada
                                $('#service').val($('#'+id).attr('data'));
                                //Hacemos desaparecer el resto de sugerencias
                                $('#suggestions').fadeOut(1000);
                            });              
                        }
                    });
                });              
            });    
        </script>

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

     
<div class="container">
    <div class="container-fluid">
     
          <?php
            //no borrar
            $id_pac = $_SESSION['paciente']; 
            //$correo_pac = $_POST['correo_paciente']; 
              $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
              //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
              $res_nombre_pac = $conexion->query($nombre_pac);
              $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
          ?>

        <div class="container-fluid" align="center">
            <div class="row">
                <!-- trigger modal -->
                <button type="button" class="botonnuevareceta" data-toggle="modal" data-target="#myModal"></button>
                    <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content" style="margin-top: 7%">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nueva Receta</h4>
                            </div>
                            <div class="modal-body">
                             <!--modal body -->
                             <form> <!--AQUI APARECEN  LA SUGERENCIAS -->
                                Ingrese medicamento: <input type="text" size="50" id="service" name="service" />
                               <div id="suggestions"></div>
                                    
                            </form>  


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- -->
            </div> <!-- row-->
        </div>  <!-- container fluid -->
        



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

<?php

    header('Content-type: text/html; charset=iso-8859-1');
    
    $busqueda = $_POST['service'];
    $query_services = "SELECT * FROM Medicamento_cat where (Select nombre_col FROM Nombremedicamento_cat) like 'Carba';";
    //$query_services = mysql_query("SELECT  FROM services WHERE title like '" . $busqueda . "%' AND status=1 ORDER BY title DESC", $conexion);
    while ($row_services = mysqli_fetch_array($query_services)) {
        echo '<div class="suggest-element"><a data="'.$row_services['title'].'" id="service'.$row_services['service_id'].'">'.utf8_encode($row_services['title']).'</a></div>';
    }
?>

