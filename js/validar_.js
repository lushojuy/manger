function validar() 
{
  if(document.formu.nombre.value.length==0)
  {
    alert('No has escrito tu nombre'); 
	document.formu.nombre.focus() 
    return false;
  }
  
  if(document.formu.tel.value.length==0) 
  {                                           
    alert('No has escrito el teléfono');      
	document.formu.tel.focus() 
    return false;
  }
  if(isNaN(document.formu.tel.value))
  {                                      
  alert('Ingrese un numero');
    document.formu.tel.focus()    
  return false;
  }
  return true;
}
