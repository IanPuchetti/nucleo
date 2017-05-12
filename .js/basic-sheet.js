  
  function s2ab(s) {
  var buf = new ArrayBuffer(s.length);
  var view = new Uint8Array(buf);
  for (var i=0; i!=s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
  return buf;
  }

  function exportar (objeto, nombre_archivo){
  outputFile = jsonXlsx.writeFile(objeto);
  var wbout = XLSX.write(wb, { type: 'binary'});
  saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), nombre_archivo+".xlsx");
  }

  var  objeto;

  objeto = [
    {
      "Id": 1,
      "Nombre": "Ian",
      "Edad": 19
    }, {
      "Id": 2,
      "Nombre": "Paul",
      "Edad": 44
    }, {
      "Id": 3,
      "Nombre": "George",
      "Edad": 12
    }
  ];

  exportar(objeto, 'Personas');

