<?php  
session_start(); 
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
    <link href="../css/cover.css" rel="stylesheet">
    <link rel="shortcut icon" href="SmallLogo.ico" />
  <TITLE>Chibil</TITLE>
<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid" > 
    <div class="row" id="img_paddin">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <a href="medicamentos_admin.php"><img src="imgs/back.svg" width="50px" height=" 50px"> </img> </a>
        </div>
      </div>
  </div>

<div class="container" ">
  <div id="colorletra" class="container">
    <div class="container-fluid">
      <form action="Formulario_Registro_Paciente.php" method="POST">  <!--action form -->
      <div class="row" style="margin-top: 4%"> 

       <div class="col-xs-12"><h2 align="center">Medicamento</h2></div> </div>
       <div class="row" style="margin-top: 2%"> 
        <div class="col-xs-4">                
          <div align="left" class="form-group"> <!-- nombre _medic-->
            <label id="colorletra" for="txtNombre_medic">Nombre:</label>
            <input type="text" class="form-control" name="txtNombre_medic" placeholder="Nombre" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales">
           
          </div>
        </div> <!--nombre_medic-->

        <div class="col-xs-4">
          <div align="left" class="form-group"> <!--sustancia-->
            <label id="colorletra" for="txtSustancia">Sustancia Activa: </label>
            <input type="text" class="form-control" name="txtSustancia" placeholder="Sustancia activa" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" id="filtrar">
          </div>
        </div> <!--sustancia-->

        <div class="col-xs-4">
          <div align="left" class="form-group"> <!--formafarmaceutica-->
            <label id="colorletra" for="txtFormaFarmaceutica">Forma Farmacéutica:</label>
            <input type="text" class="form-control" name="txtFormaFarmaceutica" placeholder="Forma Farmaceutica" pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" id="filtrar">
          </div>
        </div> <!--formafarmaceutica-->
                
      </div> <!-- row -->


      <div class="row" style="margin-top: 4%">
        <div class="col-xs-12" > <h4>Presentación</h4></div>
      </div>
      <div class="row" style="margin-top: 2%"> 
          <div class="col-xs-3">
            <div align="left" class="form-group">
              <label id="colorletra" for="txtEmpaque">Empaque:</label>
              <input type="text" class="form-control" name="txtEmpaque" placeholder="1 Caja" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales" id="filtrar">
            </div>
          </div>
          <div class="col-xs-2">
            <div align="left" class="form-group">
              <label id="colorletra" for="txtCantidad">Cantidad:</label>
              <input type="text" class="form-control" name="txtCantidad" placeholder="30" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales" id="filtrar">
            </div>
          </div>
          <div class="col-xs-3">
            <div align="left" class="form-group">
              <label id="colorletra" for="txtPresentacion">Presentación:</label>
              <input type="text" class="form-control" name="txtPresentacion" placeholder="Tabletas" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales" id="filtrar">
            </div>
          </div>
          <div class="col-xs-4">
            <div class="col-xs-6">
              <div align="left" class="form-group">
                <label id="colorletra" align="center">Unidades:</label>
                <input type="text" class="form-control" name="txtUnidades" placeholder="250" pattern='[0-9]+' title="No se aceptan letras" id="filtrar">
              </div>
            </div>
            <div class="col-xs-6">
              <div align="left" class="form-group">
                <label id="colorletra" align="center">&nbsp;</label>
                <input type="text" class="form-control" name="txtMedida" placeholder="mg" pattern='[0-9]+' title="No se aceptan letras" id="filtrar">
              </div>
            </div>
          </div>
      </div>
                

        
    </div> <!--container-fluid-->
  </div> <!--container-->

      <div class="row" align="center"> 
        <div class="col-xl-12" style="margin-top: 4%">
         <div class="form-group">
          <button type="submit" name="btnNuevoMedicamento" class="btn btn-primary btn-lg active" >Guardar Nuevo Medicamento</button> 
         </form>
          </div>
        </div>
      </div>
 </div> <!-- container-->
</div> <!--container fluid -->


</body>
</html>
