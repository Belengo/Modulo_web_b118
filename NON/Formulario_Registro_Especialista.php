 
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

<form action="Bienvenido.php" method="GET">

				<!-- Navbar -->
<nav class="navbar navbar-default">
 	<div class="container">
 		<ul class="nav navbar-nav navbar-right">
      <li style="font-size: 12px; margin-top: 3px;">
        <a href="index.html"><span class="glyphicon glyphicon-globe" id="colorletra"></span> 
        <h7 id="colorletra">Chibil </h7></a>
      </li>
    </ul>
  </div> <!-- navbar navbar-default" -->
</nav> 


<div class="site-wrapper">
  <div class="container">
    <div id="upmenu">
    </div>
</div>



	<div id="colorletra" class="container">
		<div class="container-fluid">
			
      <div class="row"> 
				<div class="col-xs-6">
					      
                <div class="form-group"><h2>Datos Personales</h2></div>
  							<div align="left" class="form-group"> <!-- nombre-->
      							<label id="colorletra" for="nombre">Nombre(s):</label>
      							<input type="text" class="form-control" name="nombre" placeholder="Nombre(s)">
    						</div> <!-- nombre-->
    					
    					
    						
    						<div align="left" class="form-group"> <!-- apellidouno-->
      							<label id="colorletra" for="apellidouno"> Primer Apellido: </label>
      							<input type="text" class="form-control" name="apellidouno" placeholder="Primer Apellido">
    						</div> <!--apellidouno-->
    					

    					
    						<div align="left" class="form-group"> <!-- apellidodos-->
      							<label id="colorletra" for="apellidodos">Segundo Apellido: </label>
      							<input type="text" class="form-control" name="apellidodos" placeholder="Segundo Apellido">
    						</div> <!--apellidodos-->
    					

    					
    						<div align="left" class="form-group">
    							<div class="form-group"><label id="colorletra"> Sexo: </label> </div>
    							<div class="radio-inline">
  									<label><input type="radio" name="sexo" value="F">Femenino</label>
								</div>
								<div class="radio-inline">
  									<label><input type="radio" name="sexo" value="M">Masculino</label>
								</div>
								<div class="radio-inline">
  									<label><input type="radio" name="sexo" value="O">Otro</label>
								</div>
							  </div>

                <div align="left" class="form-group"> 
                    <label id="colorletra" for="telpersonal">Celular:</label>
                    <input type="text" class="form-control" name="telpersonal" placeholder="Celular">
                </div> 

                <div align="left" class="form-group"> 
                    <label id="colorletra" for="cedula">Cédula:</label>
                    <input type="text" class="form-control" name="cedula" placeholder="Cédula">
                </div> 

                <div align="left" class="form-group"> 
                    <label id="colorletra" for="especialidad">Especialidad(es):</label>
                    <input type="text" class="form-control" name="especialidad" placeholder="Especialidad(es)">
                </div> 

				</div> <!--col-xs-6 -->



				<div class="col-xs-6">
					<div class="form-group"><h2>Datos de contacto</h2></div>
						 		<div align="left" class="form-group">
      							<label id="colorletra" for="calle">Calle:</label>
      							<input type="text" class="form-control" name="calle" placeholder="Calle">
    						</div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="num">Número:</label>
                    <input type="text" class="form-control" name="num" placeholder="Numero ext. (e interior si aplica)">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="email">Colonia:</label>
                    <input type="text" class="form-control" name="colonia" placeholder="Colonia">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="codpost">Codigo Postal:</label>
                    <input type="text" class="form-control" name="codpost" placeholder="Codigo Postal">
                </div>

                <div align="left" class="form-group">
                    <label id="colorletra" for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                </div>

    	  </div><!--col-xs-6 -->
			</div> <!-- row -->

      <div class="row">
        <div class="col-xl-6">
          <div class="form-group"><h2>Cuenta de usuario</h2></div>
            <div class="form-group">
                    <label id="colorletra" for="correo">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="correo" placeholder="Ingrese correo (con este ingresará al sistema)">
            </div>
        </div>

      <div class="row">  
        <div class="col-xs-6">
              <div class="form-group">
                    <label id="colorletra" for="contrasena">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasena" placeholder="Ingrese contraseña ">
              </div>
        </div>

        <div class="col-xs-6">
              <div class="form-group">
                    <label id="colorletra" for="contrasena">Repita Contraseña:</label>
                    <input type="password" class="form-control" name="recontrasena" placeholder="Ingrese contraseña ">
              </div>
        </div>

      </div> <!-- Row -->

  	</div> <!--container-fluid-->
	</div> <!--container-->

	    <div class="row">	
        <div class="col-xl-6">
         <div class="form-group">
          <button type="submit" name="registrar" class="btn btn-primary btn-lg active">Registrarme</button>

          </div>
        </div>
      </div>
</form>
	
</div> <!-- div class site wrapper-->


<footer class="footer">
	<div class=" container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
  	</div>
</footer>


</body>

</html>




 			