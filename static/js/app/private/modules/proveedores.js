jQuery(document).ready(function ($) {
	console.log('en -  proveedor.js');

	$(document).ready(function () {
		console.log('ready!');
		$('#tabla-datos').load(base_url() + 'proveedor/tabla');
		load_tbl;
	});

	$(document).on('click', '.btn-delete', function (event) {
		event.preventDefault();

		if (window.confirm('Esta seguro de eliminar este registro?')) {
			console.log( $(this).attr('data-info'))
			$.ajax({
				url: base_url() + 'proveedor/delete',
				type: 'post',
				data: { idProveedor: $(this).attr('data-info') },
				cache: false,
				dataType: 'json',
				success: function (json) {
					console.log(json.resultado);

					if (json.resultado == 'true') {
						alert(json.mensaje);
						$('#tabla-datos').load(base_url() + 'proveedor/tabla');
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

});

function clear_form() {
	$('#form-usuarios').trigger('reset');
	$('#id_usuario').val('').change();
}

function load_tbl() {
	$('tabla-datos').load(base_url() + 'proveedor/tabla');
}

function unblock_btn_submit() {}
