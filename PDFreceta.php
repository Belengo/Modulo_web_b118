<?php
include('PDF.php');
include ('config.php');
 
    $id_pac = $_SESSION['paciente']; 
    $nombre_pac = "SELECT CONCAT (nombre_col,' ', apellidouno_col,' ',apellidodos_col) as 'NombreCompleto', correo_col as 'correo' FROM $table_persona WHERE id_persona='$id_pac'";
          //echo "<script type=\"text/javascript\">alert(\"$nombre_pac\");</script>"; 
          $res_nombre_pac = $conexion->query($nombre_pac);
          $row_res_nombre_pac = $res_nombre_pac->fetch_array(MYSQLI_ASSOC);
          $paciente = $row_res_nombre_pac ['NombreCompleto'];
 
    //Recibimos dentro de una cadena la fecha
    $query_fecha = "SELECT DAY(fecha_col) as 'dia', MONTH(fecha_col) as 'mes', year(fecha_col) as 'year' from Diagnóstico_tb where Paciente_tb_id_Paciente=$id_pac and fecha_col = $param_fecha";
    $res_fecha = conexion -> query($query_fecha);
    $row_res_fecha = $res_fecha->fetch_array(MYSQLI_ASSOC);

    $fecha = "Mexico a ".$row_res_fecha['dia']." de ".$row_res_fecha['mes']." de ".$row_res_fecha['year'];

 
    //Se crea un objeto de PDF
    //Para hacer uso de los métodos
    $pdf = new PDF();
    $pdf->AddPage('P', 'Letter');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,$fecha,0,1,'R'); 
 
    $pdf->Cell(40,7,$paciente,0, 1 , ' L ');
    $pdf->Ln();
 
    $pdf->ImprimirTexto('textoFijo.txt'); //Texto fijo 
 
    //Creamos objeto de la clase myDBC
    //para hacer uso del método seleccionar_persona()
    $consultaPersona = new myDBC();
 
    //En una variable guardamos el array que regresa el método
    $datosPersona = $consultaPersona->seleccionar_persona($mat);
 
    //Array de cadenas para la cabecera
    $cabecera = array("Nombre","A Paterno","A Materno", "Matricula", "Puesto");
    $pdf->tabla($cabecera,$datosPersona); //Método que integra a cabecera y datos
 
    $pdf->Output(); //Salida al navegador del pdf
 /*	
	$query_fecha = "SELECT DAY(fecha_col), MONTH(fecha_col), year(fecha_col) from Diagnóstico_tb where Paciente_tb_id_Paciente=$id_pac and fecha_col = $param_fecha";
    //Se crea un objeto de PDF
    //Para hacer uso de los métodos
    $pdf = new PDF();
    $pdf->AddPage('P', 'Letter'); //Vertical, Carta
    $pdf->SetFont('Courier','B',12); //Arial, negrita, 12 puntos
 
    $pdf->Output(); //Salida al navegador del pdf

    echo “<script language=’javascript’>window.open(‘PDFreceta.pdf’,’_self’,”); </script>”;//paral archivo pdf generado*/


?>