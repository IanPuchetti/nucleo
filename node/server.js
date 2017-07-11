var http = require('http');
var app = http.createServer(function(req, res) {
});
var io = require('socket.io').listen(app);
var usuarios=[];

io.sockets.on('connection', function(socket) {
	
	socket.on('disconnect', function (){
	});
	
	socket.on('tiempo', function (data){
				io.sockets.emit('panel', data);
				
	});
});

app.listen(3002);
