const { Socket } = require('engine.io');
const express = require('express');

const app = express();

const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: {
        origin: "*" 
    }
});

io.on('connection', (socket) => {
    console.log('Connected with ID: '+ socket.id);
    
    /* The `socket.on('send-message', (chatData, room) => { ... })` function is an event listener that
    listens for the 'send-message' event emitted by the client. */
    socket.on('send-message', (data, room) => {
        let roomId = 'room_'+room.toString();
        // socket.emit('receive-message', message);
        socket.to(roomId).emit('receive-message', data);
        console.log('Message is sent to room: '+ room);
    });

    /* The `socket.on('join-room', room => { ... })` function is an event listener that listens for the
    'join-room' event emitted by the client. */
    socket.on('join-room', room => {
        console.log(socket.id+' joined room: '+ room.toString());
        socket.join('room_'+room.toString());
        console.log(socket.rooms);
    });
    socket.on('send-call', room => {
        console.log('Call is sent to room '+room);
        let roomId = 'room_'+room.toString();
        socket.to(roomId).emit('receive-call', {});
    });
    socket.on('deny-call', room => {
        console.log('Call is denied to room '+room);
        let roomId = 'room_'+room.toString();
        socket.to(roomId).emit('denied-call', {});
    });
    socket.on('accept-call', room => {
        console.log('Call is accepted to room '+room);
        let roomId = 'room_'+room.toString();
        socket.to(roomId).emit('accepted-call', room);
    });
});

server.listen(3000, () => {
    console.log('Server is running');
});