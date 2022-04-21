const express = require('express'),
    app = express(),
    server = require('http').createServer(app),
    io = require('socket.io')(server, {
        cors: {origin: '*'}
    });

io.on('connection', function (socket) {
    console.log('a user connected');
    socket.on('disconnect', function (socket) {
        console.log('user disconnected');
    });
    socket.on('sendChatToServer', function (msg) {
        io.sockets.emit('sendChatToServer', msg);
        // socket.broadcast.emit('sendChatToClient', msg);
    });
});

server.listen(process.env.PORT || 3001, () => {
    console.log('Server listening at port %d', server.address().port);
});
