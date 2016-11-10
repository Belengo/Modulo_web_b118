<?php

class Mysql_bd {
 
	/* variables de conexión */
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	 
	 
	/* identificador de conexión y consulta */
	var $Conexion_ID = 0;
	var $Consulta_ID = 0;
	 
	/* número de error y texto error */
	var $Errno = 0;
	var $Error = "";
	 
 
		/* Método Constructor: Cada vez que creemos una variable
		de esta clase, se ejecutará esta función */
		function Mysql_bd($bd = "", $host = "localhost", $user = "nobody", $pass = "") {
			$this->BaseDatos = $bd;
			$this->Servidor = $host;
			$this->Usuario = $user;
			$this->Clave = $pass;
		} //método constructor
 
		/*Conexión a la base de datos*/
		function conectar($bd, $host, $user, $pass){
		 
		if ($bd != "") $this->BaseDatos = $bd;
		if ($host != "") $this->Servidor = $host;
		if ($user != "") $this->Usuario = $user;
		if ($pass != "") $this->Clave = $pass;
			 
		// Conectamos al servidor
			$this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
			if (!$this->Conexion_ID) {
				$this->Error = "Ha fallado la conexión.";
				return 0;
			}
	 		//seleccionamos la base de datos
			if (!@mysql_select_db($this->BaseDatos, $this->Conexion_ID)) {
				$this->Error = "Imposible abrir ".$this->BaseDatos ;
				return 0;
			}
	 
			/* Si hemos tenido éxito conectando devuelve 
				el identificador de la conexión, sino devuelve 0 */
				return $this->Conexion_ID;
		} //Function conectar
	 
		/* Ejecuta un consulta */
		function consulta($sql = ""){
		 	if ($sql == "") {
				$this->Error = "No ha especificado una consulta SQL";
				return 0;
			}	 
			//ejecutamos la consulta
			$this->Consulta_ID = $Conexion_ID ->query($sql); 
	 
			if (!$this->Consulta_ID) {
				$this->Errno = mysqli_errno();
				$this->Error = mysqli_error();
			}
		/* Si hemos tenido éxito en la consulta devuelve 
		el identificador de la conexión, sino devuelve 0 */
			return $this->Consulta_ID;
		} //function consulta

		 
		/* Devuelve el número de campos de una consulta */
		function numcampos() {
			return mysqli_num_fields($this->Consulta_ID);
		} //function numcampos
	 
		/* Devuelve el número de registros de una consulta */
		function numregistros(){
			return mysqli_num_rows($this->Consulta_ID);
		} //function numeroregistros
	 
		/* Devuelve el nombre de un campo de una consulta */
		function nombrecampo($numcampo) {
			return mysqli_field_name($this->Consulta_ID, $numcampo);
		}//function nombrecampo

		function arrayconsulta(){
			return mysqli_fetch_array(this->Consulta_ID);
		}
	 
		/* Muestra los datos de una consulta */
		
		function verconsulta() {
			echo "<table border=1>\n"; 
			// mostramos los nombres de los campos
			for ($i = 0; $i < $this->numcampos(); $i++){
				echo "<td><b>".$this->nombrecampo($i)."</b></td>\n";
			}
			echo "</tr>\n";
			// mostrarmos los registros 
			while ($row = mysqli_fetch_row($this->Consulta_ID)) {
				echo "<tr> \n";
				for ($i = 0; $i < $this->numcampos(); $i++){
					echo "<td>".$row[$i]."</td>\n";
				}
				echo "</tr>\n";
			}
		} //function verconsulta tabla
	 
 
} //fin de la Clase Mysql_bd

?>