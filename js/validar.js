//valor = document.getElementById("campo").value;
//if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
//return false;
//} comprueba que el valor sea valido,que tenga long mayor q cero y no solo se hayan escritos espacios en blancos

function validar() 
{
  if(document.formu.nombre.value.length==0) //comprueba que no esté vacío el campo donde va el nombre
  { // formu es el nombre del formulario y nombre es el campo que queremos preguntar
    alert('No has escrito tu nombre'); 
	document.formu.nombre.focus() 
    return false; //devolvemos el foco
  }
  
  if(document.formu.apellido.value.length==0) 
  {                                           
    alert('No has escrito el apellido');      
  document.formu.apellido.focus() 
    return false;
  }
  if(document.formu.mail.value.length==0)  //vmail = document.getElementById("mail").value;
  {                                        //if( !(/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(vmail)) ) 
    alert('No has escrito el correo');     //return false; comprobación de mail mediantes expresiones regulares
	document.formu.mail.focus() 
    return false;
  }
	
  if( !(/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(document.formu.mail.value))) 
  { 
    alert('Direccion de mail incorrecta'); 
	document.formu.mail.focus() 
    return false;
  }
  
  if(isNaN(document.formu.telefono.value))
  {                                      
  alert('Ingrese un numero');
    document.formu.telefono.focus()    
  return false;
  }
  
  if(document.formu.observacion.value.length==0) 
  { 
    alert('No has escrito ninguna observación'); 
	document.formu.observacion.focus() 
    return false;
  }

  return true;
}
