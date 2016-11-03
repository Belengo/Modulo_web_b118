<?php

    header('Content-type: text/html; charset=iso-8859-1');
    
    $busqueda = $_POST['service'];
    $query_services = mysqli_query("SELECT id_persona, nombre_col FROM persona_tb WHERE nombre_col like '" . $busqueda . "%' AND status=1 ORDER BY title DESC", $conexion);
    //$query_services = mysql_query("SELECT service_id, title FROM services WHERE title like '" . $busqueda . "%' AND status=1 ORDER BY title DESC", $conexion);
    while ($row_services = mysqli_fetch_array($query_services)) {
        echo '<div class="suggest-element"><a data="'.$row_services['nombre_col'].'" id="service'.$row_services['id_persona'].'">'.utf8_encode($row_services['nombre_col']).'</a></div>';
    }
?>