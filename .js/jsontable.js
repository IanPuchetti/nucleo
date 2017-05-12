function json_tabla (id_tabla, objeto){
	var headers = Object.keys(objeto[0]);
	$("#"+id_tabla).html('');
	$("#"+id_tabla).append("<tr id='thead_"+id_tabla+"' class='tabla-head'></tr>");
	for (var i in headers){
							$("#thead_"+id_tabla).append("<td style='background:#eee;font-size:12px;'>"+headers[i]+"</td>");
	}
	for (var i in objeto){
						   $("#"+id_tabla).append("<tr style='font-size:10px;' id='tr_"+id_tabla+i+"' class='tabla-body'></tr>");
							for (var e in headers){
								$("#tr_"+id_tabla+i).append("<td>"+objeto[i][headers[e]]+"</td>");
	}
}
}
