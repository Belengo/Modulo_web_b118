<?php
session_start();
include('config.php'); 
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
    <link rel="stylesheet" type="text/css" href="grafica_theme.css">
</HEAD>
<BODY>

<meta charset="utf-8"> 

<?php
require_once("RandomClass.php");

        $id_pac = $_SESSION['paciente']; 
        $id_bitacora = $_POST['bitacora'];
        $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
        //echo "<script type=\"text/javascript\">alert(\"$id_bitacora\");</script>"; 
        $res_nombre_pac = $conexion->query($nombre_pac);
        $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
        $Paciente = $row_res_nombre_pac['NombreCompleto'];

//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//obtenemos toda la información de la tabla random
$lectura = "SELECT frec_col, temp_col, tiempo_col FROM Lecturas_tb WHERE Bitacora_tb_id_bitacora =$id_bitacora;";
//echo "<script type=\"text/javascript\">alert(\"$lectura\");</script>";
$rawdata = $rand->getAllInfo($lectura);

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valoresArray;
$valoresArray2;
$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valoresArray[$i]= $rawdata[$i][1];
    $valoresArray2[$i]= $rawdata[$i][0];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i]["tiempo_col"];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $timeArray[$i] = $date->getTimestamp()*1000;
    //echo "<script type=\"text/javascript\">alert(\"$timeArray[$i]\");</script>"; 
}
?>

    <div class="row">
      <div class="col-xs-12">
        <div class="container-fluid" align="left"> 
          <form action="vestible.php" method="POST">
            <input type="hidden" name="correo_paciente" value="<?php echo $row_res_nombre_pac['correo']; ?>" width="3" height="3" >
            <input class="botonregresar" VALUE="" type="submit" name="ver">
            </input>  
            </input>
          </form>
        </div>
      </div>
    </div>


<div class="container">
<div id="contenedor" style="width:100%; height: 400px;"></div>
</div>


<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({

    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'
    },

	rangeSelector : {
		allButtonsEnabled: true,

		buttons: [{
				type: 'second',
				count: 3,
				text: '3s'
			}, {
				type: 'minute',
				count: 1,
				text: 'min'
			}, {
				ype: 'minute',
				count: 3,
				text: '3min'
			}, {
				type: 'hour',
				count: 1,
				text: '1h'
			}, {
				type: 'all',
				text: 'All'
		}],

		inputDateFormat: '%H:%M:%S.%L',
		inputEditDateFormat: '%H:%M:%S.%L',
		inputDateParser: function (value) {
            value = value.split(/[:\.]/);
            return Date.UTC(
               	parseInt(value[0], 10),
                parseInt(value[1], 10),
                parseInt(value[2], 10),
                parseInt(value[3], 10)
            );
        }
    },

    title: {
        text: 'Paciente: <?php echo $Paciente; ?>'
    },

    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },

    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: ' ',
            margin: 10
        }
    },



            
    series: [{
        name: 'Frec',
                data: (function() {
                   var data = [];
                    <?php
                        for($i = 0 ;$i<count($rawdata);$i++){
                    ?>
                    data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray2[$i];?>]);
                    <?php } ?>
                return data;
                })()
            },{
        name: 'Temp',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for( $i = 0 ; $i<count($rawdata) ; $i++ ){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;  
            })()
    }],
    credits: {
            enabled: false
    }
});

</script>   
</BODY>

</html>