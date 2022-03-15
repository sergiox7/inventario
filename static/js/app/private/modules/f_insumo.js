jQuery(document).ready(function ($) {
	console.log('en -  f_insumo.js');

	// cargar los proveedores
	$(document).ready(function () {
		console.log('ready!');
 			$.ajax({
				url: base_url() + 'proveedor/getall',
				type: 'post',
 				cache: false,
				dataType: 'json',
				success: function (json) {
					if (json.resultado == 'true') {
						$.each( json.respuesta, function( k, v ) {
            				$('#select_prov').append(`<option value="${v.idProveedor}">
                            	${v.nombre}
                            </option>`);

						});
					} else {
						alert('Ocurrió un error, por favor vuelva a intentarlo');
					}
				},
				error: function (ts) {
					console.log(ts.responseText);
					alert('Ocurrió un error, por favor vuelva a intentarlo');
					
				},
			}); 

 			if($('#id_registro').val() !== ''){
 			//Cargar datos
 		 	$.ajax({
				url: base_url() + 'insumo/get',
				type: 'post',
				data: {id: $('#id_registro').val()},
 				cache: false,
				dataType: 'json',
				success: function (json) {
					if (json.resultado == 'true') {
						console.log(json);
						$('#nombre').val(json.respuesta.nombre).change();
						$('#select_unidad').val(json.respuesta.unidadMedida).change();
						$('#select_prov').val(json.respuesta.idProveedor).change();
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
			url: base_url() + 'insumo/insert',
			type: 'post',
			data: { 
				nombre: 		$('#nombre').val(),
				unidadMedida: 	$('#select_unidad').val(),
				idProveedor: 	$('#select_prov').val(),
			},
			cache: false,
			dataType: 'json',
			success: function (json) {
 				console.log(json.message);
				console.log(json.data);

				if (json.resultado == 'true') {
					alert('Registro completo');
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
			url: base_url() + 'insumo/edit',
			type: 'post',
			data: { 
				idInsumo: 	$('#id_registro').val(),
				nombre: 		$('#nombre').val(),
				unidadMedida: 	$('#select_unidad').val(),
				idProveedor: 	$('#select_prov').val(),
			},
			cache: false,
			dataType: 'json',
			success: function (json) {
console.log(json);
				if (json.resultado == 'true') {
					alert('Registro completo');
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
