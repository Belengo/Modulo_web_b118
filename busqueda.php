<?php
include("config.php");
$q = $_POST['q'];
extraer($q);
?>
               
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="ajax.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="cover.css" rel="stylesheet">
    <link href="flaticon.css" rel="stylesheet1">
    <link rel="shortcut icon" href="SmallLogo.ico" />
    <TITLE>Chibil</TITLE>
</head>
<body id="colorletra">
        <form style="margin-top: 10%"> 
            <input type="text" size="50" id="texto" name="texto" onkeypress="buscar();" />
            <div id="resultados"></div>
        </form>
</body>
</html>