//spam message the chats with thirugram.js 
//open up telegram web and go to the chat you want to spam 
//open console ( Ctrl + Shift + J )
//execute the code 
var message = "hai"; //spam message 
var interval = 1  ; // in seconds 
var count = 10 ; //number of times to send
var notifyInterval = 5 ; //notify 
var i = 0 ;
var timer = setInterval(function(){
	document.getElementsByClassName('composer_rich_textarea')[0].innerHTML = message;
	$('.im_submit').trigger('mousedown');	
	i++;
	if( i  == count )
	clearInterval(timer);
	if( i % notifyInterval == 0)
	console.log(i + ' MESSAGES SENT');
} , interval * 1000 ) ;
//BTW , this is how I sent 10,000 Happy birthday wishes to my friend.
