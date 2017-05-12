var wkhtmltopdf = require('wkhtmltopdf');
var fs = require("fs");
var http = require('http');
var app = require('express')();
var server = require('http').Server(app);
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(function (req, res, next) {

    // Website you wish to allow to connect
var allowedOrigins = ['http://172.17.50.82', 'http://localhost'];
  var origin = req.headers.origin;
  if(allowedOrigins.indexOf(origin) > -1){
       res.setHeader('Access-Control-Allow-Origin', origin);
  }
    // Request methods you wish to allow
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');

    // Request headers you wish to allow
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

    // Set to true if you need the website to include cookies in the requests sent
    // to the API (e.g. in case you use sessions)
    res.setHeader('Access-Control-Allow-Credentials', true);

    // Pass to next layer of middleware
    next();
});
app.post('/carpeta', function (req, res) {
  console.log(req.body);
  var pdf = wkhtmltopdf('http://localhost/impresiones/carpeta/?documento='+req.body.documento+'&banco='+req.body.banco, { pageSize: 'letter' });
  res.set('Content-Disposition', 'attachment; filename=transcript.pdf');
  res.set('Content-Type', "application/pdf");
  pdf.pipe(res);
});
app.post('/liquidacion', function (req, res) {
  console.log(req.body);
  var _ = req.body;
  console.log('http://localhost/impresiones/liquidacion/?banco='+_.banco+'&operador='+_.operador+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&fecha_mora='+_.fecha_mora+'&dias_atraso='+_.dias_atraso+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&capital_inicial='+_.capital_inicial+'&interes='+_.interes+'&iva_sobre_interes='+_.iva_sobre_interes+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final+'&cuota_cero='+_.cuota_cero+'&cuotas_banco='+_.cuotas_banco+'&monto_cuota='+_.monto_cuota+'&cuotas_honorarios='+_.cuotas_honorarios+'&monto_honorarios='+_.monto_honorarios+'&anticipo='+_.anticipo+'&telefono1='+_.telefono1+'&telefono2='+_.telefono2+'&telefono3='+_.telefono3+'&fecha_pago='+_.fecha_pago+'&total_total='+_.total_total+'&fecha_propuesta='+_.fecha_propuesta+'&anticipo_cuota_cero='+_.anticipo_cuota_cero);
  var pdf = wkhtmltopdf('http://localhost/impresiones/liquidacion/?banco='+_.banco+'&operador='+_.operador+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&fecha_mora='+_.fecha_mora+'&dias_atraso='+_.dias_atraso+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&capital_inicial='+_.capital_inicial+'&interes='+_.interes+'&iva_sobre_interes='+_.iva_sobre_interes+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final+'&cuota_cero='+_.cuota_cero+'&cuotas_banco='+_.cuotas_banco+'&monto_cuota='+_.monto_cuota+'&cuotas_honorarios='+_.cuotas_honorarios+'&monto_honorarios='+_.monto_honorarios+'&anticipo='+_.anticipo+'&telefono1='+_.telefono1+'&telefono2='+_.telefono2+'&telefono3='+_.telefono3+'&fecha_pago='+_.fecha_pago+'&total_total='+_.total_total+'&fecha_propuesta='+_.fecha_propuesta+'&anticipo_cuota_cero='+_.anticipo_cuota_cero, { pageSize: 'letter' });
  res.set('Content-Disposition', 'attachment; filename=transcript.pdf');
  res.set('Content-Type', "application/pdf");
  pdf.pipe(res);
});
app.post('/liquidacion-santander', function (req, res) {
  console.log(req.body);
  var _ = req.body;
  console.log('http://localhost/impresiones/liquidacion-santander/?banco='+_.banco+'&operador='+_.operador+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&fecha_mora='+_.fecha_mora+'&dias_atraso='+_.dias_atraso+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&capital_inicial='+_.capital_inicial+'&interes='+_.interes+'&iva_sobre_interes='+_.iva_sobre_interes+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final+'&cuota_cero='+_.cuota_cero+'&cuotas_banco='+_.cuotas_banco+'&monto_cuota='+_.monto_cuota+'&cuotas_honorarios='+_.cuotas_honorarios+'&monto_honorarios='+_.monto_honorarios+'&anticipo='+_.anticipo+'&telefono1='+_.telefono1+'&telefono2='+_.telefono2+'&telefono3='+_.telefono3+'&fecha_pago='+_.fecha_pago+'&total_total='+_.total_total+'&fecha_propuesta='+_.fecha_propuesta+'&anticipo_cuota_cero='+_.anticipo_cuota_cero);
  var pdf = wkhtmltopdf('http://localhost/impresiones/liquidacion-santander/?banco='+_.banco+'&operador='+_.operador+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&fecha_mora='+_.fecha_mora+'&dias_atraso='+_.dias_atraso+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&capital_inicial='+_.capital_inicial+'&interes='+_.interes+'&iva_sobre_interes='+_.iva_sobre_interes+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final+'&cuota_cero='+_.cuota_cero+'&cuotas_banco='+_.cuotas_banco+'&monto_cuota='+_.monto_cuota+'&cuotas_honorarios='+_.cuotas_honorarios+'&monto_honorarios='+_.monto_honorarios+'&anticipo='+_.anticipo+'&telefono1='+_.telefono1+'&telefono2='+_.telefono2+'&telefono3='+_.telefono3+'&fecha_pago='+_.fecha_pago+'&total_total='+_.total_total+'&fecha_propuesta='+_.fecha_propuesta+'&anticipo_cuota_cero='+_.anticipo_cuota_cero, { pageSize: 'letter' });
  res.set('Content-Disposition', 'attachment; filename=transcript.pdf');
  res.set('Content-Type', "application/pdf");
  pdf.pipe(res);
});
app.post('/liquidacion-credicoop', function (req, res) {
  console.log(req.body);
  var _ = req.body;
  var pdf = wkhtmltopdf('http://localhost/impresiones/liquidacion-credicoop/?productos='+JSON.stringify(_.productos)+'&operador='+_.operador+'&banco='+_.banco+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final, { pageSize: 'letter' });
  res.set('Content-Disposition', 'attachment; filename=transcript.pdf');
  res.set('Content-Type', "application/pdf");
  pdf.pipe(res);
});
app.post('/liquidacion-patagonia', function (req, res) {
  console.log(req.body);
  var _ = req.body;
  var pdf = wkhtmltopdf('http://localhost/impresiones/liquidacion-patagonia/?productos='+JSON.stringify(_.productos)+'&operador='+_.operador+'&banco='+_.banco+'&documento='+_.documento+'&titular='+_.titular+'&fecha_actualizacion='+_.fecha_actualizacion+'&fecha_mora='+_.fecha_mora+'&dias_atraso='+_.dias_atraso+'&iva='+_.iva+'&tasa='+_.tasa+'&porcentaje_honorarios='+_.porcentaje_honorarios+'&gastos='+_.gastos+'&estado='+_.estado+'&capital_inicial='+_.capital_inicial+'&interes='+_.interes+'&iva_sobre_interes='+_.iva_sobre_interes+'&sub_total='+_.sub_total+'&iva_sobre_honorarios='+_.iva_sobre_honorarios+'&cuota_promedio='+_.cuota_promedio+'&total_promedio='+_.total_promedio+'&total_promedio='+_.total_promedio+'&pagos='+_.pagos+'&numero_gestion='+_.numero_gestion+'&quita_descripcion='+_.quita_descripcion+'&quita_final='+_.quita_final, { pageSize: 'letter' });
  res.set('Content-Disposition', 'attachment; filename=transcript.pdf');
  res.set('Content-Type', "application/pdf");
  pdf.pipe(res);
});
server.listen(3001);
