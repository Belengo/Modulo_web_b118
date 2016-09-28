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
    <a href="vestible.php"> Vestible </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="historiaclinica.php"> Historia Clínica  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="consulta.php" style="visibility:hidden;">Consultas</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="receta.php"> Recetas </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>

  <div class="container">
        
    
    <div align="left">
    <table  width="100%" id="colorletra">
        
        <th><h4 id="colorletra">Paciente: Nombre ApellidoP ApellidoM </h4></th>
        <th>Edad</th>
        <th id="tth">&nbsp;&nbsp;&nbsp;&nbsp; Dx&nbsp;&nbsp;</th>

      <table id="colorletra" align="center">

   
  <tr>
    <td> Alergias 
      <input type="text" name= "txtAlergias" placeholder="Escriba las alergias, separadas por coma. EJemplo \n  Penicilina, polvo, perros" required="true"></input></td>
  </tr>


  <tr>
    <tr> <td><b>Antecedentes médicos</b></td></tr>

    <tr> 
     <td> <b>Padre</b> </td>
     <tr><td><input type="checkbox" name= "padre_hipertension" value="Hipertensión"> Hipertensíon</input></td></tr>
     <tr><td><input type="checkbox" name= "padre_diabetes" value="Diabétes" >Diabetes</input></td></tr>
     <td><input type="checkbox"  name= "padre_cáncer"  value="Cáncer"  >Cáncer&nbsp;&nbsp;&nbsp;</input>
     <input type="text" name= "cancertype" placeholder="Escriba qué tipo cáncer"></input></td>
     <tr><td><input type="checkbox" name= "padre_obesidad" value="obesidad"> Obesidad</input></td></tr>
      <tr><td><textarea name= "otros" rows="5" cols="40" placeholder="Otros">Otros Padecimientos</textarea></td></tr>
    </tr>

    <tr>
        <td><b> Madre </b></td>
        <tr><td><input type="checkbox" name= "madre_hipertension" value="Hipertensión"> Hipertensíon</input></td></tr>
        <tr><td><input type="checkbox" name= "madre_diabetes" value="Diabétes" >Diabetes</input></td></tr>
        <td><input type="checkbox" name= "madre_cáncer" value="Cáncer"  >Cáncer&nbsp;&nbsp;&nbsp;</input>
        <input type="text" name= "cancertype" placeholder="Escriba qué tipo cáncer"></input></td>
        <tr><td><input type="checkbox" name= "madre_obesidad" value="obesidad"> Obesidad</input></td></tr>
       <tr><td><textarea name= "otros" rows="5" cols="40" placeholder="Otros">Otros Padecimientos</textarea></td></tr>
    </tr>
    </tr>
  </tr>
    <tr>
    <td align="center"><input type="submit" name="botongurd" value="Guardar" ></input></td>
   </tr>
    </table>
</form>


<div id="footer">
TT- 2015-B118  &nbsp;  &nbsp;
<a href="acercade.html"> Acerca de</a> &nbsp;&nbsp;&nbsp;
</div>





</body>
</html>