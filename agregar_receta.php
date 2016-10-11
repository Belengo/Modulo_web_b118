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



<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button>
            </div>
             
            <div class="collapse navbar-collapse" id="myNavbar"> 
                <ul class="nav navbar-nav navbar-right">
                    <li style="font-size: 12px; margin-top: 3px;">
                    <a href="index.php" ><span id="colorletra" style="margin-top:3px;"><img src="linkedinsquare.png"></span> </a> </img>
                    </li>
                </ul><!-- /ul nav bar-->
                <div align="center" > 
                <h2 align="center" id="colorletra">Dr. Nombre ApellidoMa ApellidoPa</h2> </div>
            </div>  <!-- div class="collapse navbar-collapse" -->.
        </div>
    </div>
</nav> 


<div class="site-wrapper">
  <div class="container" >
  </div>

    <div class="container" >
        <div id="upmenu">
            <a href="verpacientes.php"> Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    
    <div class="container"><h4>  </h4></div>

   <div class="container" >
    <div id="upmenu">
    <a href="vestible.php"> Vestible </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="historiaclinica.php"> Historia Clínica  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <a href="receta.php" style="visibility:hidden;"> Recetas </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>

  <div class="container">
        
    
    <div align="left">
    <table  width="100%" id="colorletra">
        
        <th><h4 id="colorletra">Paciente: Nombre ApellidoP ApellidoM </h4></th>
        <th>Edad</th>
        <th id="tth">&nbsp;&nbsp;&nbsp;&nbsp; Dx. &nbsp;&nbsp;</th>
        
        
    </table>
  </div>

    <div class="container">
        <div class="container" style="margin-top:10%;" width=50%>
        
            <div id="colorletra">
               <table>
                 <tr>
                    <th>1. Medicamento&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>100mg<&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th><input type=text placeholder="cada hh hrs">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th><input type=text placeholder="periódo">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th> &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal" id="colorletra"></span></th>
                 </tr>

                 <tr>
                    <th>2. Medicamento&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>50mg<&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th><input type=text placeholder="cada hh hrs" >&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th><input type=text placeholder="periódo">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th> &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal" id="colorletra"></th>
                 </tr>
               </table>
            </div>
            <dir class="container">
              
            </dir>

             <div class="container">
              <form action="agregar_receta.php">
                <input id="colorletra" id="btnAgregar" type="submit" value="Agregar medicamento">
                 
                </input> 
            </div>

              <div class="container">
                <tr>
                    <td><td><td align="center"> 
                        <input type="submit" value="Guardar"></input> </td>
                    <td><td><td align="center" > 
                        <input type="submit" value="Cancelar"></input> </td>   
                  </tr>
               </div>    

            

        </div>
    </div>
  </div>

</div>

<?php

if (isset($_POST["btnAgregar"])) {

    

  $lista_medic =  "Lista de medicamentos.";
echo "<script type=\"text/javascript\">alert(\"$lista_medic\");</script>";
}

  
?>





<footer class="footer">
  <div class="container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer>


<!-- Comienza php-->

<?php




?>

<!-- Termina php-->

