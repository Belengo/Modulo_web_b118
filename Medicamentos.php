<?php
session_start();
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
    <link rel="shortcut icon" href="SmallLogo.ico" />
  <TITLE>Chibil</TITLE>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>
    
<script type="text/javascript" src="jvs/functions.js">

</script> 
</head>
<body >




<div clas="container-fluid"> 
    <div class="row" id="img_paddin" >
    <div class="col-xs-12">
      <div class="container-fluid" align="left"> 
        <img src="imgs/back.svg" width="50px" height=" 50px" onclick="history.back(-1);"> </img> 
      </div>
    </div>
  </div>

  <div class="container" ">
  <?php
    $id_session = $_SESSION['userid'];
    include("config.php");
    //Declarar Consulta 
    $seleccionar_medicamentos = "SELECT * FROM $catalog_medicamento; ";
      //echo "<script type=\"text/javascript\">alert(\"$seleccionar_medicamentos\");</script>"; 
      //Query de consulta
      $selec_med = $conexion->query($seleccionar_medicamentos);        
    //Numero total de pacientes
      $total_medicamentos = mysqli_num_rows($selec_med);
  ?>

    <div class="row" >
      <div class="panel panel-default">
        <div class="panel-heading">
           
               
          <div class="col-xs-6">
            <input type="search" class="form-control" id="filtrar" placeholder="Buscar medicamento..."></input>
          </div>
          <br /> </br/>
        </div> <!--div class panel heading-->
           
        <table id="colorletra" class="table table-fixed" >
          <thead>
            <tr style="font-weight:bold" align="center">
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/sust-activa.svg" width="40" height="40" ></img></td> 
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/nombre-medic.svg" width="40" height="40" > </img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/forma-farma1.svg" width="40" height="40" ></img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/presentacion.svg" width="40" height="40" ></img></td>
              <td class="col-xs-2"><img class="img-thumbnail" src="imgs/laboratorio.svg" width="40" height="40" ></img></td>
            </tr>
            <tr align="center">
              <td class="col-xs-2">Sustancia Activa</td> 
              <td class="col-xs-2">Nombre</td>
              <td class="col-xs-2">Forma Farmacéutica</td>
              <td class="col-xs-2">Presentación</td>
              <td class="col-xs-2">Laboratorio</td>
            </tr>
          </thead>

          <tbody align="center" class="buscar">
            <?php 
              for($i=0;$i<$total_medicamentos; $i++){
                $row = mysqli_fetch_array($selec_med);
                 //while($row = mysqli_fetch_array($selec_pac)){ ?>
                <tr>
                  <td class="col-xs-4" id="colorletra" >
                    <?php 
                      $idsustancia = $row['sustanciaActiva_cat_id_sustanciaActiva'];
                      $nombresust = "SELECT nombre_col FROM sustanciaActiva_cat WHERE id_sustanciaActiva =$idsustancia ;";
                      $res_sust = $conexion ->query($nombresust);
                      $row_sust = mysqli_fetch_array($res_sust);

                      printf( "%s", $row_sust['nombre_col'] );
                    ?>
                  </td>

                  <td class="col-xs-4" id="colorletra"> <?php 
                      $idnombre = $row['Nombremedicamento_cat_id_Nombremedicamento'];
                      $nombre = "SELECT nombre_col FROM Nombremedicamento_cat WHERE id_nombremedicamento = $idnombre;";
                      $res_nombre = $conexion ->query($nombre);
                      $row_nombre = mysqli_fetch_array($res_nombre);

                      printf( "%s", $row_nombre['nombre_col'] );
                       ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php
                      $idformafarma = $row['Formafarmaceutica_cat_id_formafarmaceutica'];
                      $forma = "SELECT descripcion_col FROM Formafarmaceutica_cat WHERE id_formafarmaceutica = $idformafarma;";
                      $res_forma = $conexion ->query($forma);
                      $row_forma = mysqli_fetch_array($res_forma);

                      printf( "%s", $row_forma['descripcion_col'] );
                       ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php

                      $id_presentacion = $row['Presentacionmedic_cat_id_Presentacionmedic'];
                      $presentacion = "SELECT * FROM $catalogo_presentacionMedic WHERE  id_presentacionmedic = $id_presentacion;";
                      $res_presentacion = $conexion -> query($presentacion);
                      $row_presentacion = mysqli_fetch_array($res_presentacion);
                      $empaqueid = $row_presentacion['empaque_cat_id_empaquemed'];
                      $cantidadid = $row_presentacion['cantidad_cat_id_cantidad'];
                      $presenid = $row_presentacion['presentacion_cat_id_presentacion'];
                      $unidadesid = $row_presentacion['Unidades_cat_id_Unidades'];
                      $medidaid= $row_presentacion['Medida_cat_idmedida_cat'];

                      $empaque = "SELECT nombreEmpaque_col FROM $catalogo_empaque WHERE id_empaque = $empaqueid  ;";
                      //echo "<script type=\"text/javascript\">alert(\"$empaque\");</script>"; 
                       $res_empaque = $conexion ->query($empaque);
                       $row_empaque = mysqli_fetch_array($res_empaque);

                      $cantidad = "SELECT cantidad_col FROM $catalogo_cantidad WHERE id_cantidad = $cantidadid;";
                     //echo "<script type=\"text/javascript\">alert(\"$cantidad\");</script>"; 
                       $res_cantidad = $conexion -> query($cantidad);
                       $row_cantidad = mysqli_fetch_array($res_cantidad);

                       $presen = "SELECT presentacion_col FROM $catalogo_presentacion WHERE id_presentacion = $presenid;";
                       $res_presen= $conexion -> query($presen);
                       $row_presen = mysqli_fetch_array($res_presen);

                        $unidades = "SELECT cantidad_col FROM $catalogo_unidades WHERE id_unidades = $unidadesid;";
                       $res_unidades= $conexion -> query($unidades);
                       $row_unidades = mysqli_fetch_array($res_unidades);
                       
                        $medida = "SELECT medida_col FROM $catalogo_medida  WHERE idmedida_cat = $medidaid;";
                         
                       $res_medida= $conexion -> query($medida);
                       $row_medida = mysqli_fetch_array($res_medida);
                       printf("%s con %s %s de %s %s", $row_empaque['nombreEmpaque_col'], $row_cantidad['cantidad_col'], $row_presen['presentacion_col'], $row_unidades['cantidad_col'], $row_medida['medida_col']);
                    ?>
                  </td>

                  <td class="col-xs-4" id="colorletra"> <?php
                      $idlab = $row['Laboratorio_cat_id_laboratorio'];
                      $laboratorio = "SELECT nombre_col FROM Laboratorio_cat WHERE id_laboratorio = $idlab;";
                      $res_lab = $conexion ->query($laboratorio);
                      $row_lab = mysqli_fetch_array($res_lab);

                      printf( "%s", $row_lab['nombre_col'] );
                       ?>
                      
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div> <!-- panel panel-default"> -->
    </div> <!-- div class row-->
  </div> <!-- container -->
     
      


</div> <!-- container margin top =5%-->

</body>
</html>

