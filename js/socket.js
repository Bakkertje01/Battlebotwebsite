var socket = io.connect('http://localhost:8080');
 var testBot = '{"speed":"300","time":"3000","mac":"80DAD343QRE","distance":"150","name":"bot17"}';

//  addOrUpdateBot(testBot);

 socket.on('connected', function (data) {
  //  $("h1").html('Connection established')
 });

 socket.on('update_bot', function(data){
   addOrUpdateBot(data);
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
 function reconnect(name){
     socket.emit("reconnectEvent", name);
     console.info("reconnect command send...")
     alert("Wordt op nieuw verbonden...");
 }

 function addOrUpdateBot(jsonString){
   var jsonobj = $.parseJSON(jsonString)
   var alreadyExist = false;

   // Searching for existing row with this mac
   $('#table_bots > tbody  > tr').each(function() {
     if($(this).attr("mac") == jsonobj.mac){
         $(this).find("td").eq(1).html(jsonobj.speed);
         $(this).find("td").eq(2).html(jsonobj.distance);
         $(this).find("td").eq(3).html(jsonobj.time);
         alreadyExist = true;
         console.log("ding bestaat al");
         return false;
     }
   });

   //console.info(alreadyExist);
   // Bot did not yet exist... creating new row
   if(!alreadyExist){
     console.log(alreadyExist);
     //console.info('<tr mac="' + jsonobj.mac + '"><td>' + jsonobj.name + '</td><td>' + jsonobj.speed + '</td><td>' + jsonobj.distance + '</td><td>' + jsonobj.time + '</td></tr>');
     console.info("Created bot row: " + jsonobj.mac);
     $('#table_bots > tbody').append('<tr mac="' + jsonobj.mac + '"><td>' + jsonobj.name + '</td><td>' + jsonobj.speed + '</td><td>' + jsonobj.distance + '</td><td>' + jsonobj.time + '</td><td> <button class="btn btn-info" onclick="reconnect(\''+ jsonobj.name +'\')">reconnect</button>\n</td></tr>');
   }
 }
