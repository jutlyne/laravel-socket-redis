const express = require("express"),
    app = express(),
    server = require("http").createServer(app),
    io = require("socket.io")(server, {
        cors: { origin: "*" },
    }),
    redis = require("ioredis"),
    redisClient = new redis(1000),
    client = redis.createClient(1000);

redisClient.subscribe('*', (err, count) => {})
redisClient.on('pmessage', function (pattern, channel, message) {
    console.log(message);
    io.sockets.emit('sendChatToServer', message);
    message = JSON.parse(message);
    console.log(channel + ":" + message.event, message.data.message);
    io.emit(channel + ":" + message.event, message.data.message);
    console.log('send');
});

client.on("connect", function () {
    console.log("Connected!");
});

// io.on("connection", function (socket) {
//     console.log("a user connected" + socket.id);
//     socket.on("disconnect", function (socket) {
//         console.log("user disconnected");
//     });
//     socket.on("sendChatToServer", function (msg) {
//         // console.log(msg);
//         // io.sockets.emit('sendChatToServer', msg);
//         socket.broadcast.emit("sendChatToClient", msg);
//     });
// });

server.listen(process.env.PORT || 3001, () => {
    console.log("Server listening at port %d", server.address().port);
});
