<?php

function fechaActual(){
	$date = "SELECT NOW() as 'fecha'";
    $res_date = $conexion -> query($date);
    $row_res_date = $res_date -> fetch_array(MYSQLI_ASSOC);
    $fecha_actual = $row_res_date['fecha'];
    return $fecha_actual;
}

?>