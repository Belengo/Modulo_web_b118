 
 function buscador(){
 var xmlhttp=false;ç
  try{
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch(e){
  try {
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E){
  xmlhttp =false;
  }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
  xmlhttp =new XMLHttpRequest();
  }
  return xmlhttp;
 }

 function extraer($q){
 $query_consulta = "Select nombre_col FROM Persona_tb WHERE nombre_col like '%&q%'";
 $query = conexion -> query($query_consulta);
  if ($mysqli_nums_rows($query)==0){
   echo "No se encontraron resultados"
  } else {
   while ($row = mysqli_fetch_assoc($query)){
   	 echo $row['nombre_col'].'<br />';
   }
  }
 }


 function buscar(){
 	var texto = document.getElementById('texto').value;
 	var Resultados = document.getElementById('resultados');
 	ajax =  buscador();
 	ajax.open("GET","busqueda.php?q="+texto);
 	ajax.onreadystatechange = function() {
 		if(ajax.readyState == 4) {
 			resultados.innerHTML = ajax.responseText;
 		}
 	}
 	ajax.send (null)
 }