function saveEventReso() {

var qty 		= $("#qty").val();
var event 		= $("#event").val();
var request 	= $("#request").val();
var email 		= $("#email").val();

var res			= email.split("@");
var username	= res[0];
var domain		= res[1];
var domain		= domain.toLowerCase();


if(domain != 'opentable.com'){
	validateMessage("div.required-email","We know our waffles are delicious but this is and OpenTabler only event.");
}
else if (qty == 0) {
	validateMessage("div.required-qty","Don't be shy. Select the number of waffles you're willing to eat.");
}
else if (event == 0) {
	validateMessage("div.required-event","Please select an event.");
}
else{
	//insert record here...   
//	$.ajax({
//		type: "GET",
//		url: "insertReso.php",
//		data: {
//		       qty: qty,
//		       event: event,
//		       email: email,
//		       request: request
//		   },
//		datatype: "json",
//		success: function (result) {
//		    
//		       	 }
//		});
	alert(domain);
}
}
	
//
function validateMessage(element, msg){
	$( element ).html( msg );
}
