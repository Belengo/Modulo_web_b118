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

      <?php
        $id_pac = $_SESSION['paciente']; 
        //$correo_pac = $_POST['correo_paciente']; 
          $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
      ?>

<div class="container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="pag_paciente.php" method="POST">
        <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo'] ?>" width="3" height="3" >
        <input class="botonregresar" value="" type="submit" name="ver">
        </input>  
        </input>
      </form>
        </div>
      </div>
    </div>



<div class="container-fluid">
  <div class="container" id="colorletra"> <!-- CONTENEDOR DE PESTAÑAS-->
    <ul class="nav nav-tabs" id="colorletra">
      <li class="active"><a data-toggle="tab" href="#Datos" id="colorletra">Historia Clínica</a></li>
      <li><a data-toggle="tab" href="#Diagnostico" id="colorletra">Diagnóstico</a></li>
      <li><a data-toggle="tab" href="#Heredo-Familiares" id="colorletra">Antecedentes Heredo-Familiares</a></li>
      <li><a data-toggle="tab" href="#Patologicos" id="colorletra">Antecedentes Patológicos</a></li>
      <li><a data-toggle="tab" href="#Nopatologicos" id="colorletra">Antecedentes No patológicos</a></li>
      <li><a data-toggle="tab" href="#Alergias" id="colorletra">Alergias</a></li>
    </ul>  

    <div class="tab-content">


    <div id="Datos" class="tab-pane fade in active" align="left">
        <img src="imgs/historia.svg" height="45" width="45"></img>
        <h3>Historia clínica de:</h3><h4> <?php $row_nombre_paciente = $row_res_nombre_pac["NombreCompleto"];
          echo $row_nombre_paciente; ?> </h4>                 
    </div>

    <div id="Diagnostico" class="tab-pane fade"> <!--Diagnostico -->
      <form action="diagnostico.php" method="POST"> <!--action form-->
        <div class="row"><div class="col-xs-12"><h3>Diagnostico</h3><br/></div></div>
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label for="txtMotivoConsulta">Motivo de la consulta:</label>
              <textarea class="form-control" rows="5" name="txtMotivoConsulta"></textarea>
            </div>
            <div class="form-group">
              <label for="txtExploracionNeuro">Exploración Neurológica:</label>
              <textarea class="form-control" rows="5" name="txtExploracionNeuro"></textarea>
            </div>
          </div>
       
          <div class="col-xs-6">
            <div class="form-group">
              <label for="txtPadecimiento">Padecimiento actual:</label>
              <textarea class="form-control" rows="5" name="txtPadecimiento"></textarea>
            </div>
            <div class="form-group">
              <label for="txtCrisisTipo">Tipo de crisis:</label>
              <textarea class="form-control" rows="5" name="txtCrisisTipo"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="txtNotasDiagnostico">Notas:</label>
              <textarea class="form-control" rows="5" name="txtNotasDiagnostico"></textarea>
            </div>
          </div>
        </div>
          <div class="row" id="border">
            <div class="col-xs-3"></div>
            <div class="col-xs-3">
              <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificarDiagnostico" type="submit">Modificar</button>
            </div> 
            <div class="col-xs-3">
                <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarDiagnostico" type="submit">Guardar </button>
            </div> 
            <div class="col-xs-3"></div>
          </div>
        </form>
      </div> <!--Diagnostico -->

      <div id="Heredo-Familiares" class="tab-pane fade"> <!--Heredo Familiares-->
        <form action="heredofam.php" method="POST"> <!--action form-->
        <div class="col-xs-12"><h3>Antecedentes Heredo-Familiares</h3><br /></div>
        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label><input type="checkbox" value="Cancer" onclick="txtCancer.disabled = !this.checked">Cáncer:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
              <input type="text" class="form-control" rows="5" name="txtCancer" disabled placeholder="Familiar, Tipo, fue causa de muerte..."></input>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label> <input type="checkbox" value="respiratorias" onclick="txtRespiratorias.disabled = !this.checked">Enfermedades respiratorias:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
              <input type="text" class="form-control" rows="5" name="txtRespiratorias" disabled placeholder="Familiar,Tipo..." ></input>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label> <input type="checkbox"  value=cerebrovasculares onclick="txtCerebrovasculares.disabled = !this.checked">Enfermedades Cerebrovasculares:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
              <input type="text" class="form-control" rows="5" name="txtCerebrovasculares" disabled placeholder="Familiar,Tipo..." ></input>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label> <input type="checkbox" value="neurologicos" onclick="txtTranstornosNeurologicos.disabled = !this.checked">Transtornos neurológicos:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
                <input type="text" class="form-control" rows="5" name="txtTranstornosNeurologicos" disabled placeholder="Familiar, tipo,..."></input>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label> <input type="checkbox" value="diabetes" onclick="txtDiabetes.disabled = !this.checked">Diabetes:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
              <input type="text" class="form-control" rows="5" name="txtDiabetes" disabled placeholder="Familiar, tipo, ..."> </input>   
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4" align="left">
            <div class="checkbox">
              <label> <input type="checkbox" value="hipertension" onclick="txtHipertension.disabled =! this.checked">Hipertension:</input></label>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="checkbox">
              <input type="text" class="form-control" rows="5" name="txtHipertension" disabled placeholder="Familiar, tipo, ..."></input>
            </div>
          </div>
        </div>

        <div class="row"> 
          <div class="col-xs-12">
            <div class="form-group">
              <label for="txtNotasHeredo">Notas:</label>
              <textarea class="form-control" rows="5" name="txtNotasHeredo"></textarea>
            </div>
          </div>
        </div> 

       <!-- Botones modificar guardar -->
        <div class="row" id="border">
          <div class="col-xs-3"></div>
          <div class="col-xs-3">
            <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificarHeredo" type="submit">Modificar</button>
          </div> 
          <div class="col-xs-3">
            <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarHeredo" type="submit">Guardar </button>
          </div> 
          <div class="col-xs-3"></div>
        </div> 
      </form>           
      </div> <!--Heredo Familiares-->
          

      <div id="Patologicos" class="tab-pane fade"> <!-- patologicos-->
      <form action="Patologicos.php" method="POST"> <!--action form-->
        <div class="col-xs-12"><h3>Antecedentes patológicos</h3><br /> </div>
       
        
          <div class="row">
            <div class="col-xs-3" align="left">
              <div class="checkbox">
                <label><input type="checkbox" value="cirugias" onclick="txtCirugias.disabled = !this.checked">Cirugías:</input></label>
              </div>
            </div>
            <div class="col-xs-9">
              <div class="checkbox">
                <input type="text" class="form-control" rows="5" name="txtCirugias" disabled placeholder="fecha, causa, ..."></input>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-3" align="left">
              <div class="checkbox">
                <label><input type="checkbox" value="traumatismos" onclick="txtTraumatismos.disabled = !this.checked">Traumatismos:</input></label>
              </div>
            </div>
            <div class="col-xs-9">
              <div class="checkbox">
                <input type="text" class="form-control" rows="5" name="txtTraumatismos" disabled placeholder="fecha, causa, ..."></input>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-3" align="left">
              <div class="checkbox">
                <label><input type="checkbox" value="cirugias" onclick="txtHospitalizaciones.disabled = !this.checked">Hospitalizaciones:</input></label>
              </div>
            </div>
            <div class="col-xs-9">
              <div class="checkbox">
                <input type="text" class="form-control" rows="5" name="txtHospitalizaciones" disabled placeholder="fecha, causa, ..."></input>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-3" align="left">
              <div class="checkbox">
                <label><input type="checkbox" value="cirugias" onclick="txtTransfusiones.disabled = !this.checked">Transfusiones:</input></label>
              </div>
            </div>
            <div class="col-xs-9">
              <div class="checkbox">
                <input type="text" class="form-control" rows="5" name="txtTransfusiones" disabled placeholder="fecha, causa, ..."></input> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12" style="margin-top: 7%;">
              <div class="form-group">
                <label for="txtNotasPatologicos">Notas:</label>
                <textarea class="form-control" rows="5" name="txtNotasPatologicos"></textarea>
              </div>
            </div>
          </div>

        <div class="row" id="border">
          <div class="col-xs-3"></div>
          <div class="col-xs-3">
            <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificarPatologicos" type="submit">Modificar</button>
          </div> 
          <div class="col-xs-3">
            <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarPatologicos" type="submit">Guardar </button>
          </div> 
          <div class="col-xs-3"></div>
          </div>
        </form>
      </div> <!--Patologicos-->


      <div id="Nopatologicos" class="tab-pane fade"> <!--NO patologicos-->
      <form action="Nopatologicos.php" method="POST"> <!--action form-->
        <div class="col-xs-12"><h3>Antecedentes No patologícos</h3><br /></div>
          <div align="left">
            <div class="checkbox">
                <label><input type="checkbox" value="Tabaquismo" onclick="txttabaquismo.disabled = !this.checked">Tabaquismo</label>
                <input type="text" class="form-control" name="txttabaquismo" disabled placeholder="Tiempo de adicción, último cigarro desde... ">
              </div> 
              <div class="checkbox">
                <label><input type="checkbox" value="Alcoholismo" onclick="txtalcoholismo.disabled = !this.checked">Alcoholismo</label>
                <input type="text" class="form-control" name="txtalcoholismo" disabled="true" placeholder="Tiempo de adicción, última copa desde... ">                
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="Drogas" onclick="txdrogas.disabled = !this.checked">Drogas</label>
                <input type="text" class="form-control" name="txdrogas" disabled="true" placeholder="Tiempo de adicción, droga consumida... ">
              </div>
            </div>
            <div class="form-group" align="left">
              <label for="txtNotasNoPatologicos">Notas:</label>
              <textarea class="form-control" rows="3" name="txtNotasNoPatologicos" placeholder="Otros..."></textarea>
            </div>
            <div class="row" id="border" >
              <div class="col-xs-3"></div>
              <div class="col-xs-3">
                <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificarNopato" type="submit">Modificar</button>
              </div> 
              <div class="col-xs-3">
                <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarNopato" type="submit">Guardar </button>
              </div> 
              <div class="col-xs-3"></div>
            </div>
            </form>
          </div> <!--NO patologicos-->

          <div id="Alergias" class="tab-pane fade">  <!--Alergias-->
            <form action="alergias.php" method="POST"> <!--action form-->
              <div class="col-xs-12"><h3>Alergias <br /></h3></div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="txtAlergiasAntiepilepticos">Antiepilépticos:</label>
                    <textarea class="form-control" rows="5" name="txtAlergiasAntiepilepticos"></textarea>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="txtAlergiasTopicos">Sustancias Tópicas:</label>
                    <textarea class="form-control" rows="5" name="txtAlergiasTopicos"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                  <label for="txtNotasAlergias">Notas:</label>
                  <textarea class="form-control" rows="5" name="txtNotasAlergias"></textarea>
                  </div>
                </div> 
              </div>             
              <div class="row" id="border">
                <div class="col-xs-3"></div>
                <div class="col-xs-3">
                  <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnModificarAlergias" type="submit">Modificar</button>
                </div> 
                <div class="col-xs-3">
                  <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnGuardarAlergias" type="submit">Guardar </button>
                </div> 
                <div class="col-xs-3"></div>
              </div>
            </form>          
          </div> <!--Alergias-->

    </div> <!--Div class tab-content-->
  </div> <!--Div class container-->
</div><!--div class container-fluid -->
</div>
    
<?php
        //Obtener id_paciente
        $id_pac = $_SESSION['paciente'];
        echo $id_pac;
?>

