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
  <div class="container">
    <div id="upmenu">
    </div>
</div>
  
  <div class="container" >
    <div id="upmenu">
      <a href="verpacientes.php"> Pacientes  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Formulario_Registro_Paciente.php" > Registrar Nuevo Paciente </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Medicamentos.php"> Medicamentos </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Modificar_datos.php"> Modificar mis Datos</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>


  <div id="colorletra" class="container">
    <div class="container-fluid">
      <form action="Formulario_Registro_Paciente.php" method="POST">  <!--action form -->
      <div class="row"> 
        <div class="col-xs-6">
                
                <div class="form-group"><h2>Datos Personales</h2></div>
                <div align="left" class="form-group"> <!-- nombre-->
                    <label id="colorletra" for="nombre">Nombre(s):</label>
                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre(s)" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales">
                </div> <!-- nombre-->
                
                <div align="left" class="form-group"> <!-- apellidouno-->
                    <label id="colorletra" for="apellidouno"> Primer Apellido: </label>
                    <input type="text" class="form-control" name="txtApellidouno" placeholder="Primer Apellido" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales">
                </div> <!--apellidouno-->
                
                <div align="left" class="form-group"> <!-- apellidodos-->
                    <label id="colorletra" for="apellidodos">Segundo Apellido: </label>
                    <input type="text" class="form-control" name="txtApellidodos" placeholder="Segundo Apellido" pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales">
                </div> <!--apellidodos-->
                
                <div align="left" class="form-group">
                  <div class="form-group"><label id="colorletra"> Sexo: </label> </div>
                  <div class="radio-inline">
                    <label><input type="radio" name="radSexo" value="F" required>Femenino</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="radSexo" value="M">Masculino</label></div>
                <div class="radio-inline">
                    <label><input type="radio" name="radSexo" value="O">Otro</label></div>
                </div>

                <div align="left" class="form-group"> 
                    <label id="colorletra" for="telpersonal">Celular:</label>
                    <input type="text" class="form-control" name="txtTelpersonal" placeholder="Celular" pattern='[0-9]+' title="Sólo números">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="correo">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="txtCorreo" placeholder="Ingrese correo" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Utiliza el formato correo@example.com"> 
            </div>

        </div> <!--col-xs-6 -->



        <div class="col-xs-6">
          <div class="form-group"><h2>Datos de contacto</h2></div>
                <div align="left" class="form-group">
                    <label id="colorletra" for="calle">Calle:</label>
                    <input type="text" class="form-control" name="txtCalle" placeholder="Calle" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9]+' title="No se aceptan caractéres especiales">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="num">Número:</label>
                    <input type="text" class="form-control" name="txtNum" placeholder="Numero ext. (e interior si aplica)" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="colonia">Colonia:</label>
                    <input type="text" class="form-control" name="txtColonia" placeholder="Colonia" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="codpost">Codigo Postal:</label>
                    <input type="text" class="form-control" name="txtCodpost" placeholder="Codigo Postal" pattern='[0-9]+' title="No se aceptan letras">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="txtTelefono" placeholder="Teléfono" pattern='[0-9]+' title="No se aceptan letras">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="vestible">Código Vestible:</label>
                    <input type="text" class="form-control" name="txtVestible" placeholder="Código de vestible" required title="Este campo es necesario">
                </div>

        </div><!--col-xs-6 -->
      </div> <!-- row -->
        
    </div> <!--container-fluid-->
  </div> <!--container-->

      <div class="row"> 
        <div class="col-xl-6">
         <div class="form-group">
          <button type="submit" name="btnRegistrar" class="btn btn-primary btn-lg active">Registrar</button> 
         </form>
          </div>
        </div>
      </div>

  
</div> <!-- div class site wrapper-->


<footer class="footer">
  <div class=" container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
    </div>
</footer>

<?php
if (isset($_POST["btnRegistrar"])) {
      # code...
      include("config.php");
      include("captura_persona.php");
      include("captura_direccion.php");
      include("capturar_pac.php");
      
         
      //lectura de datos cn el método POST
        //PERSONA
        //$id = mysql_query($conexion, "SELECT COUNT(id_persona) FROM $table_persona");
        $nombre = getNombre();      //persona_tb
        $apellidouno = getApellidouno(); //persona_tb
        $apellidodos = getApellidodos(); //persona_tb
        $sexo = getSexo();          //persona_tb
        $telpersonal = getTelpersonal(); //persona_tb
        $correo = getCorreo();    //persona_tb
        //DIRECCION
        $calle = getCalle();        //direccion_tb
        $num = getNum();        //direccion_tb
        $colonia = getColonia();    //direccion_tb
        $codpost = getCodpost();    //direccion_tb
        $telefono = getTelefono();    //direccion_tb
        //PACIENTE
        $vestible = getVestible();  //paciente_tb

        //Verificar correo existente

          $nueva_persona = "INSERT INTO $table_persona (nombre_col, apellidouno_col, apellidodos_col, telpersonal_col, correo_col, sexo_col) VALUES ('$nombre', '$apellidouno', '$apellidodos', '$telpersonal', '$correo', '$sexo'); ";
              if ($conexion->query($nueva_persona) === TRUE) {
                $last_id = $conexion->insert_id;
                  //echo "<script type=\"text/javascript\">alert(\"$last_id\");</script>";
              }
          $nueva_direccion = "INSERT INTO $table_direccion (calle_col, num_col, colonia_col, codpost_col, telefono_col, persona_tb_id_persona) VALUES ('$calle','$num', '$colonia', '$codpost', '$telefono', '$last_id');";
              $conexion->query($nueva_direccion);
               //echo "<script type=\"text/javascript\">alert(\"$nueva_direccion\");</script>";                
              $nuevo_paciente =  "INSERT INTO $table_paciente (id_Paciente, idvestible) VALUES ('$last_id','$vestible');";
                $conexion->query($nuevo_paciente);
        echo "<script> alert (\"Su registro se ha guardado satisfactoriamente. 1\"); </script>"; 
        echo "<script language=Javascript> location.href=\"pag_paciente.php\"; </script>";  
        
} //if isset

      $nueva_persona = ""; 
      $nueva_direccion = "";
      $nuevo_espec = "";
      $nuevo_usuario = "";

?>

</body>
</html>
