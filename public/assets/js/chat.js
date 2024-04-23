let host = 'localhost';
let port = '3000';
let socket = io(host+':'+port);
// let chatSound = document.getElementById("chatAudios"); 
var chatSound = new Audio(base_url+'/public/assets/sounds/chat.mp3');
socket.on('connect', () => {
    console.log('Coonected with ID: '+ socket.id);
});

let joinChat = (room) => {
    socket.emit('join-room', room);
}

let leaveChat = (room) => {
    socket.emit('leave-room', room);
}

const plotMessages = (data, activeUser, element) => {
    let sender = data.senderPhoto;
    let fetchedData = data.data;
    fetchedData.sort(function(a, b) {
        return a.chat_id - b.chat_id;
    });
    data.data.forEach(data => {
        let messageData = {
            'actor': data.actor,
            'senderPhoto': sender,
            'data': data
        };

        if(data.created_by != activeUser){
            receivedMessage(messageData);
        }
        else{
            myMessage(messageData);
        }
    })
    scrollMsgBottom();
}

const myMessage = (data) => {

    if(data.data.message == ''){
        myFile(data);
    }
    else{
        $('#messages').append(`
            <div class="d-flex justify-content-end mb-10">
                <div class="d-flex flex-column align-items-end">
                    <div class="d-flex align-items-center mb-2">
                        <div class="me-3 d-flex flex-column text-end">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            <span class="text-muted fs-8 mb-1">${moment(data.data.created_at).fromNow()}</span>
                        </div>
                        <div class="symbol symbol-40px">
                            <img alt="Pic" src="${base_url}/public/assets/media/avatars/${data.senderPhoto}">
                        </div>
                    </div>
                    <div class="p-5 rounded bg-primary text-white fw-semibold mw-lg-400px text-end" data-kt-element="message-text">${data.data.message}</div>
                </div>
            </div>
        `);
    }
    
    scrollMsgBottom();
}

const receivedMessage = (data) => {
    if(data.data.message == ''){
        receivedFile(data);
    }
    else{
        $('#messages').append(`<div class="d-flex justify-content-start mb-10" >
            <div class="d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-2">
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="${base_url}/public/assets/media/avatars/${data.senderPhoto}">
                    </div>
                    <div class="ms-3 d-flex flex-column">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">${data.data.actor}</a>
                        <span class="text-muted fs-8 mb-1">${moment(data.data.created_at).fromNow()}</span>
                    </div>
                </div>
                <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">${data.data.message}</div>
            </div>
        </div>`);
    }
    
    scrollMsgBottom();
}

const myFile = (data) => {

    $('#messages').append(`

            <div class="d-flex justify-content-end mb-10"  >
                <div class="d-flex flex-column align-items-end  w-50">
                    <div class="d-flex align-items-center mb-2">
                        <div class="me-3 d-flex flex-column text-end">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            <span class="text-muted fs-8 mb-1">${moment(data.data.created_at).fromNow()}</span>
                        </div>
                        <div class="symbol symbol-40px">
                            <img alt="Pic" src="${base_url}/public/assets/media/avatars/${data.senderPhoto}">
                        </div>
                    </div>
                    <div class="px-3 py-3 rounded bg-light-primary border border-dashed border-primary  w-100 text-start d-flex flex-row lh-2" onclick = "javascript: openFile(this)" data-kt-element="message-text" data-file = "${base_url}/public/uploads/conversations/${data.data.convo_id+'/'+data.data.file}">
                        <div class="symbol symbol-40px me-4 d-flex flex-center bg-light">
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
                                    <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </div>
                        <div class = "d-flex flex-column">

                            <span class = "text-gray-700 fw-bold text-hover-primary underlined">${data.data.file}</span>
                            <span class = "text-gray-500 fs-9">${data.data.file_size} MB</span>
                        </div>
                    </div>
                </div>
            </div>
    `);
    scrollMsgBottom();
}

const receivedFile = (data) => {
    $('#messages').append(`
        <div class="d-flex justify-content-start mb-10" >
            <div class="d-flex flex-column align-items-start  w-50">
            <div class="d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-2">
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="${base_url}/public/assets/media/avatars/${data.senderPhoto}">
                    </div>
                    <div class="ms-3 d-flex flex-column ">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">${data.actor}</a>
                        <span class="text-muted fs-7 mb-1">${moment(data.created_at).fromNow()}</span>
                    </div>
                </div>
                <div class="px-3 py-3 rounded bg-gray-200 border border-dashed border-gray-400  w-100 text-start d-flex flex-row lh-2" data-kt-element="message-text" onclick = "javascript: openFile(this)" data-file = "${base_url}/public/uploads/conversations/${data.data.convo_id+'/'+data.data.file}">
                    <div class="symbol symbol-40px me-4 d-flex flex-center bg-light">
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
                                <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <div class = "d-flex flex-column">
                        <span class = "text-gray-700 fw-bold text-hover-primary">${data.data.file}</span>
                        <span class = "text-gray-500 fs-9">${data.data.file_size} MB</span>
                    </div>
                </div>
            </div>
        </div>
    `);
    
    scrollMsgBottom();
}

let callModal = (element, audio) => {
    const modalEl = document.querySelector(element);
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
    audio.play();
}

let openFile = (element) => {
    window.open (element.dataset.file,"mywindow","menubar=1,resizable=1,width=350,height=250");
}

let openVideoChat = (element) => {
    window.open (element.dataset.file,"mywindow","menubar=1,resizable=1,width=350,height=250");
}

function scrollMsgBottom(){
    var messageCont = $('#messages');
    messageCont.scrollTop(messageCont.prop("scrollHeight"));
}
