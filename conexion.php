<?php


	$dbhost = 'localhost';
	$dbname = 'tt';
	$user = 'root';
	$pass = 'root';
	$port = '8889';
		
	
$con = mysqli_connect($dbhost,$user,$pass,$dbname,$port);

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
	echo "Conexion correcta";
}



?>