console.log("hola");
ejecutarAjax();
function ejecutarAjax(){
	$.ajax({
	"url"     : base_url() + "Recetas/getAll",
	"type"    : "post",
	"dataType"     : "json",
	"success"      : function( json ) {
		console.log("Era el puto ajax mal hecho");
	},
	error: function (ts) {
		console.log(ts.responseText);
		alert('Ocurrió un error, por favor vuelva a intentarlo');
					
	}
});
}
