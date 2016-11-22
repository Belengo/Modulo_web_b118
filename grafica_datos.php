<!DOCTYPE HTML>
<HEAD>
    <title>Grafica</title>
    <link rel="stylesheet" type="text/css" href="grafica_theme.css">
</HEAD>
<BODY>

<meta charset="utf-8"> 

<?php
require_once("RandomClass.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$lectura = "SELECT frec_col, temp_col, tiempo_col FROM Lecturas_tb;";
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
<div id="contenedor" style="width:100%; height: 400px;"></div>

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
        text: 'Paciente:'
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
        name: 'frec',
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