function saveEventReso() {

var qty 		= $("#qty").val();
var event 		= $("#event").val();
var request 	= $("#request").val();
var email 		= $("#email").val();

var res			= email.split("@");
var username	= res[0];
var domain		= res[1];
var domain		= domain.toLowerCase();


if(domain <> 'opentable.com'){
	validationMessage("div.required-email","We know our waffles are delicious but this is and OpenTabler only event.");
}
else if (qty == 0) {
	validationMessage("div.required-qty","Don't be shy. Select the number of waffles you're willing to eat.");
}
else if (event == 0) {
validationMessage("div.required-event","Please select an event.");
}
else{
	//Gather values to insert record here...
alert(domain);
}	

function validationMessage(element, msg){
	$( element ).html( msg );
}

}