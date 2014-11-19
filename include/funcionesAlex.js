// JavaScript Document
debug=true;
function mostrarFacturar(e){
	_this=$(e);
	id=_this.attr("data-id");
	$(".form_factura").show();
	$(".form_factura").find("#id").val(id);
}

function facturar(e){
	_this=$(e);
	forma=$("#formaFactura").serialize();
	$.ajax({
		url:'scripts/s_factura.php',
		cache:false,
		type:'POST',
		data:forma,
		success: function(r){
			if(debug){
				if(confirm("Actualizar?")){
					location.reload();
				}
			}
			console.log(r);
		}
	});//*/
}