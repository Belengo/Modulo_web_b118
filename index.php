<?php
  session_start();
  include("config.php");
  if(isset($_SESSION['userid'])){
    echo '<script>window.location ="inicio.php" </script>';
  }
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

    
  <TITLE>Chibil</TITLE>
</head>
<body>
  
  
<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#"><span data-toggle="modal" data-target="#ModalChibil" id="letrablanca">CHIBIL</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size: 12px; margin-top: 3px;">
          <a href="#"><h7><span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal" >&nbsp;Sign in&nbsp;</span> 
                  </h7></a>
                    <!--Modal-->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                          <div class="modal-content"> 
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="colorletra">Registro Especialista</h4>
                            </div>
                            <div class="modal-body">
                              <div id="colorletra" class="container">
                         <div class="container-fluid">
     <!--action form-->          <form action="index.php" method="POST">
      
                                  <div class="row"> 
                                    <div class="col-xs-4">
                
                                      <div class="form-group"><h2>Datos Personales</h2></div>
                                      
                                      
                                      <div align="left" class="form-group"> <!-- nombre-->
                                        <label id="colorletra" for="txtNombre">Nombre(s):</label>
                                        <input  type="text" class="form-control" name="txtNombre" placeholder="Nombre(s)" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" />
                                       </div> <!-- nombre-->
              
                                      <div align="left" class="form-group"> <!-- apellidouno-->
                                        <label id="colorletra" for="txtApellidouno"> Primer Apellido: </label>
                                        <input type="text" class="form-control" name="txtApellidouno" placeholder="Primer Apellido" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" >
                                      </div> <!--apellidouno-->
                                    
                                      <div align="left" class="form-group"> <!-- apellidodos-->
                                        <label id="colorletra" for="txtApellidodos">Segundo Apellido: </label>
                                        <input type="text" class="form-control" name="txtApellidodos" placeholder="Segundo Apellido" pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales">
                                      </div> <!--apellidodos-->
                                      
                                      <div align="left" class="form-group">
                                        <div class="form-group"><label id="colorletra"> Sexo: </label> </div>
                                          
                                          <div class="radio-inline">
                                            <label><input type="radio" name="radSexo" value="F" required>Femenino</label>
                                          </div>
                                          
                                          <div class="radio-inline">
                                            <label><input type="radio" name="radSexo" value="M">Masculino</label>
                                          </div>
                                          
                                          <div class="radio-inline">
                                            <label><input type="radio" name="radSexo" value="O">Otro</label>
                                          </div>
                                        </div>
                                      
                                      <div align="left" class="form-group"> 
                                          <label id="colorletra" for="txtTelpersonal">Celular:</label>
                                          <input type="text" class="form-control" name="txtTelpersonal" placeholder="Celular" pattern='[0-9]+' title="Sólo números">
                                      </div> 

                                      <div align="left" class="form-group"> 
                                          <label id="colorletra" for="txtCedula">Cédula:</label>
                                          <input type="text" class="form-control" name="txtCedula" placeholder="Cédula">
                                      </div> 

                                      <div align="left" class="form-group"> 
                                          <label id="colorletra" for="txtInstitucionCedula">Institución que expide la Cédula:</label>
                                          <input type="text" class="form-control" name="txtInstitucionCedula" placeholder="Institución que expide">
                                      </div> 

                                      <div align="left" class="form-group"> 
                                          <label id="colorletra" for="txtEspecialidad">Especialidad(es):</label>
                                          <input type="text" class="form-control" name="txtEspecialidad" placeholder="Especialidad(es)" pattern='[A-Za-z áéíóú ÁÉÍÓÚ ,]+' title="No se aceptan números ni caractéres especiales">
                                      </div> 

                                    </div> <!--col-xs-6 -->

                                    <div class="col-xs-5">
                                      <div class="form-group"><h2>Datos de contacto</h2></div>
                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtCalle">Calle:</label>
                                                <input type="text" class="form-control" name="txtCalle" placeholder="Calle" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                                            </div>

                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtNum">Número:</label>
                                                <input type="text" class="form-control" name="txtNum" placeholder="Numero ext. (e interior si aplica)" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                                            </div>

                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtColonia">Colonia:</label>
                                                <input type="text" class="form-control" name="txtColonia" placeholder="Colonia" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                                            </div>

                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtCodpost">Codigo Postal:</label>
                                                <input type="text" class="form-control" name="txtCodpost" placeholder="Codigo Postal" pattern='[0-9]+' title="No se aceptan letras">
                                            </div>

                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtTelefono">Teléfono:</label>
                                                <input type="text" class="form-control" name="txtTelefono" placeholder="Teléfono local" pattern='[0-9 . A-Z a-z]+' title="No se aceptan letras">
                                            </div>

                                            <div align="left" class="form-group">
                                                <label id="colorletra" for="txtDelegacion">Municipio/Delegación:</label>
                                                <input type="text" class="form-control" name="txtDelegacion" placeholder="Municipio o Delegación" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
                                            </div>
                                    </div><!--col-xs-6 -->
                                 </div> <!-- row -->

                                  <div class="row">
                                    <div class="col-xs-6">
                                        
                                        <div class="form-group"><h2>Cuenta de usuario</h2></div>
                                        
                                        <div class="form-group">
                                          <label id="colorletra" for="txtCorreo">Correo Electrónico:</label>
                                          <input type="email" class="form-control" name="txtCorreo" placeholder="Ingrese correo (con este ingresará al sistema)" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Utiliza el formato correo@example.com" >
                                        </div>
                                    
                                        <div class="form-group">
                                          <label id="colorletra" for="txtContrasena">Contraseña:</label>
                                          <input type="password" class="form-control" name="txtContrasena" placeholder="Ingrese contraseña" required>
                                        </div>
                                    
                                        <div class="form-group">
                                          <label id="colorletra" for="txtRecontrasena">Repita Contraseña:</label>
                                          <input type="password" class="form-control" name="txtRecontrasena" placeholder="Ingrese contraseña" required>
                                        </div>
                                    </div>
                                  </div> 
                               

                                </div> <!--container-fluid-->
                              </div> <!--container-->

                                 <div class="row"> 
                                    <div class="col-xs-6">
                                     <div class="form-group">
                                       <button type="submit" name="btnRegistrar" class="btn btn-primary btn-lg active">Registrarme</button>
     <!--action form-->          </form>


                                      </div>
                                    </div>
                                  </div> <!-- -->
                            </div> <!--Div modal content -->
                            <div class="modal-footer">
                             
                            </div>
                          </div>

                      </div>
                    </div>
    

                  </li>
              <li>
              <div class="dropdown" style="font-size: 12px;" >
                  <li class="dropdown-header" id="menu1" data-toggle="dropdown"> <a href="#"><h7>  
                    <span class="glyphicon glyphicon-log-in">&nbsp;Log in&nbsp;</span>
                    </h7></a>
                      </li>
                                <!-- Datos que va a desplegar el dropdown -->         
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <div class="container" id="login">
                      <form action="validar.php" method="POST">
                        <form class="form-signin">
                        <h3 class="form-signin-heading" id="colorletra" s>Inicie sesión</h3>
                          <label for="txtUsuario" id="colorletra">Correo:</label>
                          <input type="email" name="txtUsuario" class="form-control" placeholder="correo@example.com" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Utiliza el formato correo@example.com">
                          <label for="txtPass" id="colorletra">Contraseña: </label>
                          <input type="password" name="txtPass" class="form-control" placeholder="********" >
                          <div class="checkbox">
                            <label id="colorletra"> <input type="checkbox"   value="remember-me"> Recuerda mi contraseña</label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block" id="colorfondo" name="btnAceptar" type="submit">Aceptar</button>
                        </form>
                      </form>
                  </div> <!-- /container login dropdown-->
                </ul> <!-- /ul  login dropdown-->
              </div> <!-- /div  login dropdown-->
            </li>  <!-- /lista  login dropdown-->
              </ul><!-- /ul nav bar-->
      </div>  <!-- div class="collapse navbar-collapse" -->
    </div> <!-- div class="container" -->
</nav> 


<div class="site-wrapper">
  <div class="site-wrapper-inner">
      <div class="cover-container">
          <div class="inner cover">
            <img src="imgs/Logo.png" alt="Chibil">
          </div> <!--div-inner-cover-->

          <div class="inner cover">
            <h1 id="colorletra">Chibil</h1>
          </div>
          <div class="-inner-cover">
            <p class="lead" id="colorletra">Bienvenido y Bienvenida a Chibil la herramienta web que auxiliar en el monitoreo a pacientes con epilepsia haciendo uso del dispositivo vestible Chibil.</p>
        </div><!--div-->
          
      </div> <!-- div-cover-container-->
  </div>    <!-- div-site-wrapper-inner-->
</div> <!-- div-site-wrapper-->

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





  <?php
 
        
if (isset($_POST["btnRegistrar"])) {
      # code...
      //include("config.php");
      include("captura_persona.php");
      include("captura_direccion.php");
      include("captura_especialista.php");
      include("captura_usr.php");
      include("mensajes.php");  
      
        
  
      //lectura de datos cn el método POST
        //PERSONA
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
        $delegacion = getDelegacion();
        //ESPECIALISTA
        $cedula = getCedula();        //especialista_tb
        $especialidad = getEspecialidad();  //especialista_tb
        $institucionCedula = getInstitucionCedula();
        //CUENTA DE USUARIO
        $contrasena = getContrasena();    //usuario_tb
        $recontrasena = getRecontrasena();
         

        
    //Validar correo exite 
    $correo_existe = "SELECT correo_col FROM Persona_tb WHERE correo_col = '$correo'";
    $res_correo = $conexion->query($correo_existe);
    $row_correo_ex = $res_correo->fetch_array(MYSQLI_ASSOC);
    $row_correo = $row_correo_ex["correo_col"];

      if ($row_correo == $correo){
        echo "<script type=\"text/javascript\">alert(\"$mensaje_correo\");</script>";
      } else {          
        //Validar contraseña
          if($contrasena != $recontrasena){
            echo "<script type=\"text/javascript\">alert(\"$mensaje_contraseña \");</script>";

          } else {
              $nueva_persona = "INSERT INTO $table_persona (nombre_col, apellidouno_col, apellidodos_col, telpersonal_col, correo_col, sexo_col) VALUES ('$nombre', '$apellidouno', '$apellidodos', '$telpersonal', '$correo', '$sexo'); ";
            //mysql_query($conexion, $nueva_persona);
              if ($conexion->query($nueva_persona) === TRUE) {
              $last_id = $conexion->insert_id;
                //echo "<script type=\"text/javascript\">alert(\"$last_id\");</script>";        
                $nueva_direccion =  "INSERT INTO $table_direccion (calle_col, num_col, colonia_col, codpost_col, telefono_col, persona_tb_id_persona, delegacion_col) VALUES ('$calle','$num', '$colonia', '$codpost', '$telefono', '$last_id', '$delegacion');";
                  $conexion->query($nueva_direccion);
                // echo "<script type=\"text/javascript\">alert(\"$nueva_direccion\");</script>";                
                $nuevo_usuario = "INSERT INTO $table_usuario (id_usuario, pssw_col, usrtipo_col) VALUES ('$last_id','$contrasena', 'ESPECIALISTA')";
                  $conexion->query($nuevo_usuario);
                //echo "<script type=\"text/javascript\">alert(\"$nuevo_usuario\");</script>";              
                $nuevo_espec = "INSERT INTO $table_especialista (id_Especialista, cedula_col, especialidad_col, institucioncedula_col) VALUES ('$last_id','$cedula', '$especialidad', '$institucionCedula')";
                  $conexion->query($nuevo_espec);
                //echo "<script type=\"text/javascript\">alert(\"$nuevo_espec\");</script>"; 
                
        }  //else if nueva persona = true   
      echo "<script type=\"text/javascript\">alert(\"$advertencia\");</script>";
      //echo "<script language=Javascript> location.href=\"index.php\"; </script>";     
      } //else contraseña
    } //else //correo existente

  
                  
                  $nueva_persona = ""; 
                  $nueva_direccion = "";
                  $nuevo_espec = "";
                  $nuevo_usuario = "";
} //if isset 
  
?>
</body>
</html>
