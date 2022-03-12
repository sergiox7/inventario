jQuery(document).ready(function ($) {
	console.log('en -  test.js');

	$.ajax({
		url: base_url() + 'producto/getall',
		type: 'post',
		dataType: 'json',
		success: function (json) {
			if (json.resultado == 'true') {
				alert(json.respuesta);
			} else {
				alert('Ocurrió un error, por favor vuelva a intentarlo');
				//unblock_btn_submit();
				console.log(json);
			}
		},
		error: function (ts) {
			console.log(ts.responseText);
			alert('Ocurrió un error, por favor vuelva a intentarlo');
			unblock_btn_submit();
		},
	});

	$(document).on('click', '.btn-delete', function (event) {
		event.preventDefault();

		if (window.confirm('Esta seguro de eliminar este usuario?')) {
			$.ajax({
				url: base_url() + 'usuario/delete',
				type: 'post',
				data: { id_usuario: $(this).attr('data-id') },
				cache: false,
				dataType: 'json',
				success: function (json) {
					console.log(json.response_code);
					console.log(json.message);

					if (json.response_code == 200) {
						alert(json.message);
						//reload_tabla();
					} else {
						alert('Ocurrió un error, por favor vuelva a intentarlo');
					}
				},
				error: function (ts) {
					console.log(ts.responseText);
					alert('Ocurrió un error, por favor vuelva a intentarlo');
					clear_form();
				},
			});
		}
	});

	$(document).on('click', '.btn-userread', function (event) {
		event.preventDefault();

		$.ajax({
			url: base_url() + 'usuario/read_user',
			type: 'post',
			data: { id_usuario: $(this).attr('data-id') },
			cache: false,
			dataType: 'json',
			success: function (json) {
				console.log(json.response_code);
				console.log(json.message);
				console.log(json.data);

				if (json.response_code == 200) {
					// document.getElementById('id_usuario').removeAttribute('readonly');
					//document.getElementById('id_usuario').readOnly = false;
					$('#id_usuario').val(json.data.id_usaurio).change();
					$('#nombre_usuario').val(json.data.nombre_usuario).change();
					$('#apellido_usuario').val(json.data.apellido_usuario).change();
					$('#correo_usuario').val(json.data.correo_usuario).change();
					$('#telefono_usuario').val(json.data.telefono_usuario).change();
					$('#direccion_usuario').val(json.data.direccion_usuario).change();
					$('#pass_usuario').val('').change();
					$('#repeat_pass').val('').change();
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
	$('#nombre_usuario').val('').change();
	$('#apellido_usuario').val('').change();
	$('#correo_usuario').val('').change();
	$('#telefono_usuario').val('').change();
	$('#direccion_usuario').val('').change();
	$('#pass_usuario').val('').change();
	$('#repeat_pass').val('').change();
}

function block_btn_submit() {}

function unblock_btn_submit() {}

function misgatos(id_usuario) {
	$.ajax({
		url: base_url() + 'gato/show_gatos',
		type: 'post',
		data: { id_usuario: id_usuario },
		success: function (json) {
			$('#gatos_list').html(json);
			var myModal = new bootstrap.Modal(document.getElementById('gatos_modal'));
			myModal.show();
		},
	});
}
