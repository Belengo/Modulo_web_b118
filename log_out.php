<?php
session_start();
session_destroy();
 
 echo "<script type=\"text/javascript\"> alert(\"Cerraste sesión\");</script>";
echo "<script language=Javascript> location.href=\"index.php\"; </script>";

?>