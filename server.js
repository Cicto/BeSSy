const { Socket } = require('engine.io');
const express = require('express');

const app = express();

const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: {
        origin: "*" 
    }
});

let filterObject = async(object, filterKey, filterValue) => {
    let filteredObj = object.filter(obj => obj[filterKey] == filterValue);
    return filteredObj;
}

let removeObject = async(object, filterKey, filterValue) => {
    let filteredObj = object.filter(obj => obj[filterKey] != filterValue);
    return filteredObj;
}

let callQueue = [];

io.on('connection', (socket) => {
    console.log('Connected with ID: '+ socket.id);
    
    /* The `socket.on('send-message', (chatData, room) => { ... })` function is an event listener that
    listens for the 'send-message' event emitted by the client. */
    

    /* The `socket.on('join-room', room => { ... })` function is an event listener that listens for the
    'join-room' event emitted by the client. */
    socket.on('join-room', room => {
        console.log(socket.id+' joined room: '+ room.toString());
        socket.join('room_'+room.toString());
        console.log(socket.rooms);
    });
    socket.on('send-message', (data, room) => {
        let roomId = 'room_'+room.toString();
        // socket.emit('receive-message', message);
        socket.to(roomId).emit('receive-message', data);
        console.log('Message is sent to room: '+ room);
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
    socket.on('get-queue', (callBack) => {
        callBack(callQueue);
    });

    socket.on('add-to-queue', async (reqData, callBack) => {
        console.log('Room '+reqData.room+' is added to queue.');
        let status = false;
        let roomId = 'room_'+reqData.room.toString();
        let queue = await filterObject(callQueue, 'userId', reqData.userId);
        if(queue.length == 0){
            status = true;
            callQueue.push({
                userId: reqData.userId,
                time: reqData.time,
                clientName: reqData.clientName,
                room: reqData.room,
                deptId: reqData.deptId
            });
            socket.broadcast.emit('refresh-queue', callQueue);
        }
        callBack({
            status: status,
            queue: callQueue
        });
    });

    socket.on("disconnecting", () => {
        console.log(socket.rooms); // the Set contains at least the socket ID
        console.log('Leaving all rooms');
        socket.leave();
    });

    socket.on("disconnect", () => {
        // socket.rooms.size === 0
        console.log('Disconnected to rooms');   
    });
});

server.listen(3000, () => {
    console.log('Server is running');
});

