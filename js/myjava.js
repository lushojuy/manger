$(function() {
	$('#guardar').on('click', function(){
		var url = document.URL;
		location.href=url;
	});
	
	$('#nuevaAsistencia').on('click', function(){
		$('#modalAsistencia').modal({
			show:true,
			backdrop:'static',
		});
	});
	
	
	$('#generarAsistencia').on('click', function(){
		var codigo = $('#codRegistro').val();
		if(codigo.length>0){
			$.ajax({
				type: 'POST',
				data: 'codigo='+codigo,
				url: 'php/generarRegistro.php',
				success: function(data){
					if(data == 'existe'){
						$('#mensaje').html('<p class="alert alert-danger">Espere!!, este codigo de registro ya fue ingresado anteriormente, ingrese otro porfavor.</p>');
					}else{
					$('#alimento').removeAttr('disabled').focus();
					$('#regEstudiante').removeAttr('disabled');
					
					$('#codRegistro').attr('disabled','disabled');
					$('#generarAsistencia').attr('disabled','disabled');
					}
				}
			});
		}else{
			$('#mensaje').html('<p class="alert alert-warning">Espere!!, tiene que ingresar el codigo del registro.</p>');
		}
	});
	
	$('#regEstudiante').on('click', function(){
		var nombre = $('#alimento').val();
		if(nombre.length>0){
			$.ajax({
				type: 'POST',
				data: 'nombre='+nombre,
				url: 'php/ingresarEstudiante.php',
				success: function(data){
					$('#alimento').val('').focus();
					$('#contenidoRegistro').html(data);
				}
			});
		}else{
			$('#mensaje').html('<p class="alert alert-warning">Espere!!, tiene que ingresar el nombre del alimento.</p>');
		}
	});
	

});


function verDetalle(codigo){
		$.ajax({
				type: 'POST',
				data: 'codigo='+codigo,
				url: 'php/verDetalle.php',
				success: function(data){
						$('#datosAqui').html(data);
						$('#modalDetalle').modal({
								show:true,
								backdrop:'static',
						});
				}
			});
		return false;
}