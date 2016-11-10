
 <?php
   //echo "<script type=\"text/javascript\">alert(\"$seleccionar_pacientes\");</script>"; 
      $nombre_medic= "SELECT * FROM Nombremedicamento_cat;";
      $res_nombre_medic = $conexion -> query($nombre_medic);
      $total_nombre_medicamentos = mysqli_num_rows($res_nombre_medic);
?>


<?php

if (isset($_POST["btnNuevoMedicamento"])) {
      # code...
      include("captura_medicamento.php");

     //lectura de datos con el método POST
        $nombre_medic = getNombreMedic();      //persona_tb
        $sustancia = getSustancia(); //persona_tb
        $formafarmaceutica = getFormaFarma(); //persona_tb
        $empaque = getEmpaque();          //persona_tb
        $cantidad = getCantidad(); //persona_tb
        $presentacion = getPresentacion();    //persona_tb
        $unidades = getUnidades();        //direccion_tb
        $medida = getMedida();        //direccion_tb

        

} //if isset

?>


<table class="table table-fixed">
              <tbody align="center" class="buscar">
                <?php 
                 // for($i=0;$i<$total_nombre_medicamentos; $i++){
                   // $row_nombre_medic = mysqli_fetch_array($res_nombre_medic);
                   ?>
                <tr>
                  <td class="col-xs-4" id="colorletra" >
                    <?php  
                    //  printf( "%d", $row_nombre_medic['id_Nombremedicamento']);
                    ?>
                  </td>
                  <td class="col-xs-4" id="colorletra"> <?php 
                     // printf( "%d", $row_nombre_medic['nombre_col']); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>