
function validacion() {

  valor = document.getElementByName("txtNombre").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
  		alert('[ERROR] Necesita ingresar su nombre');
  		return false;

	}

  valor = document.getElementByName("txtApellidouno").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
  		alert('[ERROR] Necesita ingresar su nombre');
  		return false;

	}

  }
  else if (condicion que debe cumplir el segundo campo del formulario) {
    // Si no se cumple la condicion...
    alert('[ERROR] El campo debe tener un valor de...');
    return false;
  }
  ...
  else if (condicion que debe cumplir el último campo del formulario) {
    // Si no se cumple la condicion...
    alert('[ERROR] El campo debe tener un valor de...');
    return false;
  }
 
  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  return true;
}