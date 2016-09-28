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
<body>

								<div class="row"> 
                <form action="reg_prueba.php" method="POST"> 
                                    <div class="col-xs-4">
                
                                      <div class="form-group"><h2>Datos Personales</h2></div>
                                      
                                      <div align="left" class="form-group"> <!-- nombre-->
                                        <label id="colorletra" for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre(s)">
                                       </div> <!-- nombre-->
              
                                      <div align="left" class="form-group"> <!-- apellidouno-->
                                        <label id="colorletra" for="apellidouno">Apellido uno</label>
                                        <input type="text" class="form-control" name="txtApellidouno" placeholder="Primer Apellido">
                                      </div> <!--apellidouno-->
                                    
                                      <div align="left" class="form-group"> <!-- apellidodos-->
                                        <label id="colorletra" for="apellidodos">Apellido dos</label>
                                        <input type="text" class="form-control" name="txtApellidodos" placeholder="Segundo Apellido">
                                      </div> <!--apellidodos-->
								                    </div>
								

								                  <div class="row"> 
                                    <div class="col-xs-6">
                                     <div class="form-group">
                                     <button type="submit" name="btnRegistrar" class="btn btn-primary btn-lg active">Registrarme</button>
                                     </div>
                                    </div>
                                  </div> -->
                </form>

                 </div>

<?php
  
        $nombre = $_POST['txtNombre'];      //persona_tb
        $apellidouno = $_POST['txtApellidouno']; //persona_tb
         

        if ($nombre == $apellidouno){
          echo "hola";
        }

?>