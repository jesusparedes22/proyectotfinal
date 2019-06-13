		
function eliminar(usuario) {
	datos = {
		usuario : usuario
	}
	$.ajax({
		data: datos,
		type: 'post',
		url: '../php/eliminarUsuario.php', 
		success: function(response) {
			console.log(response)
			if (response == "Eliminado") {
				window.location.reload();
			}  
			
			
			
		}
	});
}



function modificar(usuario) {
	var div = document.getElementById('modificar');

	div.innerHTML = "<p id='obtenerUsuario'>Ingrese el nuevo correo electronico</p>\
					<form>\
						<input type=\"text\" id=\"emailNuevo\" placeholder=\"Nuevo email...\">\
						<button type=\"button\" class=\"btn btn-success\" onclick=\"confirmarModificar('" + usuario + "')\">Modificar</button>\
					</form>"
}

function confirmarModificar(usuario) {
	var email = document.getElementById('emailNuevo').value;

	var datos = {
		usuario : usuario,
		email : email
	};


	$.ajax({
		data: datos,
		type: 'post',
		url: '../php/modificarUsuario.php', 
		success: function(response) {
			console.log(response)
			if (response == "Modificado") {
				window.location.reload();
			}  
			
			
			
		}
	});
}




		
