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
</head>
<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>


<div class="container-fluid" >
<?php
        $id_pac = $_SESSION['paciente']; 
        //$correo_pac = $_POST['correo_paciente']; 
          $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
    ?>

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="pag_paciente.php" method="POST">
          <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo']; ?>" width="3" height="3" >
          <input class="botonregresar" value="" type="submit" name="ver">
          </input>  
          </input>
          </form>
        </div>
      </div>
    </div>


    <div class="container-fluid" align="left"></div>
      <?php  

                  $Consulta_persona = "SELECT * from $table_persona where id_persona = $id_pac";
                  $res_persona = $conexion->query($Consulta_persona);
                  $row_pers = $res_persona->fetch_array(MYSQLI_ASSOC);
               
                  $Consulta_direc= "SELECT * from Direccion_tb where persona_tb_id_persona = $id_pac";
                  $res_direc = $conexion->query($Consulta_direc);
                  $row_direc = $res_direc->fetch_array(MYSQLI_ASSOC);

                  ?>
       
      
      <div class="row"> 
      <form action="Perfil_Pac.php" method="POST">  <!--action form --> 
        <div class="row"> 
          <div class="form-group"><h2 id="colorletra">Datos Personales</h2></div>
        </div>

          <div class="row">
            <div class="col-xs-4">
              <div align="left" class="form-group"> <!-- nombre-->
              <label id="colorletra" for="nombre">Nombre(s):</label>
              <input  type="text" class="form-control" name="txtNombre" value="<?php echo $row_pers['nombre_col']; ?>" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" disabled/>
              </div> <!-- nombre-->
            </div>
            <div class="col-xs-4">
              <div align="left" class="form-group"> <!-- apellidouno-->
              <label id="colorletra" for="apellidouno"> Primer Apellido: </label>
              <input type="text" class="form-control" name="txtApellidouno" value="<?php echo $row_pers['apellidouno_col']; ?>" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" disabled>
              </div> <!--apellidouno-->
            </div>                      
            <div class="col-xs-4"> 
              <div align="left" class="form-group"> <!-- apellidodos-->
              <label id="colorletra" for="apellidodos">Segundo Apellido: </label>
              <input type="text" class="form-control" name="txtApellidodos" value="<?php echo $row_pers['apellidodos_col']; ?>" pattern='[A-Za-z áéíóú ÁÉÍÓÚ]+' title="No se aceptan números ni caractéres especiales" disabled>
              </div> <!--apellidodos-->
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">   
              <div align="left" class="form-group"> 
              <label id="colorletra" for="txttelpersonal">Celular:</label>
              <input type="text" class="form-control" name="txtTelpersonal" value="<?php echo $row_pers['telpersonal_col']; ?>" pattern='[0-9]+' title="Sólo números">
              </div> 
            </div>
          <div class="col-xs-4">
            <div align="left" class="form-group"> 
            <label id="colorletra" for="especialidad">Fecha de Nacimiento:</label>
            <input type="text" class="form-control" name="txtEspecialidad" value="<?php echo $row_pers['fechanac_col']; ?>"  pattern='[A-Za-z áéíóú ÁÉÍÓÚ ,]+' title="No se aceptan números ni caractéres especiales" disabled>
            </div> 
          </div>


          <div class="row">
            <div class="form-group"><h2 id="colorletra">Datos de contacto</h2></div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="calle">Calle:</label>
              <input type="text" class="form-control" name="txtCalle" value="<?php echo $row_direc['calle_col']; ?>" required pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
              </div>
            </div>
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="num">Número:</label>
              <input type="text" class="form-control" name="txtNum" value="<?php echo $row_direc['num_col']; ?>" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
              </div>
            </div>
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="email">Colonia:</label>
              <input type="text" class="form-control" name="txtColonia" value="<?php echo $row_direc['colonia_col']; ?>" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="codpost">Codigo Postal:</label>
              <input type="text" class="form-control" name="txtCodpost" value="<?php echo $row_direc['codpost_col']; ?>" pattern='[0-9]+' title="No se aceptan letras">
              </div>
            </div>
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="telefono">Teléfono:</label>
              <input type="text" class="form-control" name="txtTelefono" value="<?php echo $row_direc['telefono_col']; ?>" pattern='[0-9 . A-Z a-z]+' title="No se aceptan letras">
              </div>
            </div>
            <div class="col-xs-4">
              <div align="left" class="form-group">
              <label id="colorletra" for="telefono">Municipio/Delegación:</label>
              <input type="text" class="form-control" name="txtDelegacion" value="<?php echo $row_direc['delegacion_col']; ?>" pattern='[A-Za-z áéíóú ÁÉÍÓÚ 0-9 .]+' title="No se aceptan caractéres especiales">
              </div>
            </div>
          </div>                                       
          <div class="row">
            <div class="form-group"><h2 id="colorletra">Cuenta de usuario</h2></div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label id="colorletra" for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" name="txtCorreo" value="<?php echo $row_pers['correo_col']; ?>" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Utiliza el formato correo@example.com" disabled>
              </div>
            </div>
          </div>
       
      <div class="row" style="margin-top: 2%; margin-bottom: 2%"> 

          <div class="col-xs-4">
            <div class="form-group" align="center">
              <form action="Perfil_Pac.php" method="POST">
              <button type="submit" name="btnGuardarDatos" class="btn btn-primary btn-lg active">Actualizar</button> 
              </form>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group" align="center">
              <form action="pag_paciente.php" method="POST">
              <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo'] ?>" width="3" height="3" > 
              </input>
              <button type= name="btnCancelar" class="btn btn-primary btn-lg active">Cancelar</button> 
              </form>
            </div>
          </div>
        <div class="col-xs-4">
          <div class="container-fluid" > 
            <form action="eliminar_pac.php" method="POST">
            <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo'] ?>" width="3" height="3" >
            <input class="botoneliminar" value="" onclick="myFunction();" name="ver"> 
            </input>  
            </input>
            </form>
          </div>
        </div>

      </div> <!--row -->
<script type="text/javascript">

  function myFunction() {
        var txt;
        var r = confirm("¿Esta seguro que desea eliminar este usuario?. Si lo hace todos sus registros serán borrados");
        if (r == true) {
             location.href ='eliminar_pac.php'
            
        } else {
            
        }
        document.getElementById("demo").innerHTML = txt;
    } 
</script>

</div> <!-- CONTAINER-->


<?php


    if (isset($_POST["btnGuardarDatos"])) {
      # code...
      //include("config.php");
      include("captura_persona.php");
      include("captura_direccion.php");
      include("captura_especialista.php");
      include("captura_usr.php");
      include("mensajes.php");  

      //lectura de datos cn el método POST
        //PERSONA
        $telpersonal = getTelpersonal(); //persona_tb
        //$correo = getCorreo();    //persona_tb
        //DIRECCION
        $calle = getCalle();        //direccion_tb
        $num = getNum();        //direccion_tb
        $colonia = getColonia();    //direccion_tb
        $codpost = getCodpost();    //direccion_tb
        $telefono = getTelefono();    //direccion_tb
        $delegacion = getDelegacion();


               

            $actualizar_telpersonal = "UPDATE $table_persona SET `telpersonal_col`='$telpersonal' WHERE `id_persona`='$id_pac';";
             //echo "<script type=\"text/javascript\">alert(\"$actualizar_telpersonal\");</script>"; 

            $actualizar_calle = "UPDATE $table_direccion SET `calle_col`='$calle' WHERE `persona_tb_id_persona`='$id_pac';";
             
            $actualizar_num = "UPDATE $table_direccion SET `num_col`='$num' WHERE `persona_tb_id_persona`='$id_pac';";

            $actualizar_colonia = "UPDATE $table_direccion SET `colonia_col`='$colonia' WHERE `persona_tb_id_persona`='$id_pac';";

            $actualizar_codpost = "UPDATE $table_direccion SET `codpost_col`='$codpost' WHERE `persona_tb_id_persona`='$id_pac';"; 

            $actualizar_telefono = "UPDATE $table_direccion SET `telefono_col`='$telefono' WHERE `persona_tb_id_persona`='$id_pac';";
            
            $actualizar_delegacion = "UPDATE $table_direccion SET `delegacion_col`='$delegacion' WHERE `persona_tb_id_persona`='$id_pac';";
              echo "<script type=\"text/javascript\">alert(\"$actualizar_delegacion\");</script>";

      if (  ($conexion->query($actualizar_telpersonal) === TRUE)  && 
            ($conexion->query($actualizar_calle) === TRUE) && 
            ($conexion->query($actualizar_num) === TRUE) && 
            ($conexion->query($actualizar_colonia) === TRUE) && 
            ($conexion->query($actualizar_codpost) === TRUE) && 
            ($conexion->query($actualizar_telefono) === TRUE) && 
            ($conexion->query($actualizar_delegacion) === TRUE) ) {
                echo "<script type=\"text/javascript\">alert(\"$actualizacion_correcta\");</script>";
                echo "<script language=Javascript> location.href=\"verpacientes.php\"; </script>";
      //echo "<script language=Javascript> location.href=\"index.php\"; </script>";
        } else {
        echo "<script type=\"text/javascript\">alert(\"$actualizacion_incorrecta\");</script>";
        echo "<script language=Javascript> location.href=\"verpacientes.php\"; </script>";
        }
     
  } //if isset

?>




</body>
</html>