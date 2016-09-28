<?php
        include("config.php");
        include("captura_histo_clinic.php");

        echo $alergias = getAlergia();
        echo $antecedentes = getAntecedentes();
        echo $cirugias = getCirugias();
        echo $notas = getNotas();

        //Generar el id de Historia Clínica
        echo $idh = mysqli_query($conexion, "SELECT COUNT(Id_HistoClini) FROM $table_historiaclinica");
        echo $date = mysqli_query($conexion, "SELECT DATE(NOW())");

        mysqli_query($conexion, "INSERT INTO $table_historiaclinica (Id_HistoClini, fecha, alergias, antecedentesMedicos, cirugias, paciente_tb_id_Persona, notas_col) VALUES ('$idh','$date','$alergias', '$antecedentes', '$cirugias','$idh','$notas')");
?>