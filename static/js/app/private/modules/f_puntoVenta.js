jQuery(document).ready(function ($) {
	console.log('en -  f_ptventa.js');

	// cargar los ptventaes
	$(document).ready(function () {
		console.log('ready!'); 

 			if($('#id_registro').val() !== ''){
 			//Cargar datos
 		 	$.ajax({
				url: base_url() + 'ptventa/get',
				type: 'post',
				data: {id: $('#id_registro').val()},
 				cache: false,
				dataType: 'json',
				success: function (json) {
					console.log(json);
					if (json.resultado == 'true') {
						$('#nombre').val(json.respuesta.nombre).change();
						
					} else {
						alert('Ocurrió un error, por favor vuelva a intentarlo');
					}
				},
				error: function (ts) {
					console.log(ts.responseText);
					alert('Ocurrió un error, por favor vuelva a intentarlo, k');
					clear_form();
				},
			}); 
 		 }

/**/
	});

	/**/

	$(document).on('click', '.btn-add', function (event) {
		event.preventDefault();

		$.ajax({
			url: base_url() + 'ptventa/insert',
			type: 'post',
			data: { 
				nombre: 		$('#nombre').val(),
			},
			cache: false,
			dataType: 'json',
			success: function (json) {
 				console.log(json.mensaje);

				if (json.resultado == 'true') {
					alert(json.mensaje);
				} else {
					alert('Ocurrió un error, por favor vuelva a intentarlo');
				}
			},
			error: function (ts) {
				console.log(ts.responseText);
				alert('Ocurrió un error, por favor vuelva a intentarlo');
			},
		});
	});

	$(document).on('click', '.btn-update', function (event) {
		event.preventDefault();

		$.ajax({
			url: base_url() + 'ptventa/edit',
			type: 'post',
			data: { 
				idPtVenta: 	$('#id_registro').val(),
				nombre: 		$('#nombre').val(),
			},
			cache: false,
			dataType: 'json',
			success: function (json) {
 				console.log(json.mensaje);
				console.log(json);

				if (json.resultado == 'true') {
					alert(json.mensaje);
				} else {
					alert('Ocurrió un error, por favor vuelva a intentarlo');
				}
			},
			error: function (ts) {
				console.log(ts.responseText);
				alert('Ocurrió un error, por favor vuelva a intentarlo');
			},
		});
	});

});

function clear_form() {
	$('#form-usuarios').trigger('reset');
	$('#id_usuario').val('').change();
}

function unblock_btn_submit() {}
