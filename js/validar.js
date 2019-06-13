$(document).ready(function() {
	
	//Las siguientes variables dirán que los datos están en false
	var username = false;
	var email = false;
	var pass = false;
	

	//Validación del campo usuario.
	$("#usuario").focusout(function() {

		var exp = /^[a-zA-Z]+$/;

		if ($("#usuario").val().match(exp)) {

			$("#divusuario").html("");

			//Si se cumple la expresión regular el valor se vuelve true.
			username = true;

		} else if (!$("#usuario").val().match(exp)) {

			$("#divusuario").html("Debes introducir sólo letras.");

			//Si no se cumple la expresión regular el valor sigue en false.
			username = false;
		}
	});
	

	//Validación del correo.
	$("#correo").keyup(function() {

		var exp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;

		if ($("#correo").val().match(exp)) {

			$("#divcorreo").html("");

			//Si se cumple la expresión regular el valor se vuelve true.
			email = true;

		} else if (!$("#correo").val().match(exp)) {

			$("#divcorreo").html("El correo introducido no es válido.");

			//Si no se cumple la expresión regular el valor sigue en false.
			email = false;
		}
	});

	//Validación de la contraseña.
	$("#contra").keyup(function() {

		var exp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S/;

		if ($("#contra").val().match(exp)) {

			$("#divcontra").html("");

			pass = true;

		} else if (!$("#contra").val().match(exp)) {

			$("#divcontra").html("La contraseña introducida no es válida.");

			//Si no se cumple la expresión regular el valor sigue en false.
			pass = false;
		}
	});


	$("#registro").click(function(){	

			console.log(username);
			console.log(email);
			console.log(pass);

			//Si todos los elementos del formulario son true, se realizará la consulta con éxito.
			if (username && email && pass) {

				//las siguientes variables guardarán los valores del input que ha introducido el usuario en el formulario.

				
				var usuario = $("#usuario").val();
				var correo = $("#correo").val();
				var contra = $("#contra").val();

				var loc = "index.php";

				//datos guardará los valores que introduzca el usuario en el formulario.

				var datos = {

					"usuario": usuario,
					"correo": correo,
					"password": contra,

				};

				//Aquí hacemos la llamada el fichero php registro.php con ajax

				$.ajax({
					data:  datos,
					type:  'post',
					url:   'php/registrar.php',
					
					success:  function (response) {
						console.log(response)
						if (response == "OK") {

							location.href = loc;

						} else  {

							alert("No es posible registrarse.");
							
						}
					}

				});

			} else {

				//Si hay algún valor que sea false, mostrará un mensaje de error.

				alert("Algún elemento del formulario no es correcto.");

			}
			
		});

	});
		