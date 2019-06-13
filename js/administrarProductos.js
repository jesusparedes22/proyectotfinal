$(document).ready(function() {


	$("#subirProducto").click(function() {
		var titulo = $("#titulo").val();
		var descripcion = $("#descripcion").val();
		var precio = $("#precio").val();
		var imagen = $("#imagen").val();

		var datos = {

			titulo : titulo,
			descripcion : descripcion,
			precio : precio,
			imagen : imagen

		};


		//Aquí hacemos la llamada el fichero php login.php con ajax

		$.ajax({
			data: datos,
			type: 'post',
			url: '../php/subirProducto.php',
			beforeSend: function() {
				$("#enviando").html("Enviando")
			}, 
			success: function(response) {
				console.log(response)
				if (response == "OK") {
					window.location.reload();
				} else {
					$("#enviando").html("Nombre de usuario o contraseña incorrecto")
				}
				
				
				
			}
		});
	})
})


function eliminar(id) {
	datos = {
		id : id
	}
	$.ajax({
		data: datos,
		type: 'post',
		url: '../php/eliminarProducto.php', 
		success: function(response) {
			console.log(response)
			if (response == "Eliminado") {
				window.location.reload();
			}  
			
			
			
		}
	});
}