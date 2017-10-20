var socket = io.connect('http://localhost:8080');
socket.on('connected', function (data) {
    $("h1").html('Connection established')
});

socket.on('data_received', function(data){
    console.log(data);
});

socket.on('disconnect', function(data){
    $("h1").html(data)
});

function close(){
    socket.emit("close", "");
    console.info("Close command send...")
}
function search(){
    socket.emit("search", "");
    console.info("Search command send...")
}