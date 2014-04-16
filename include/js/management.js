function saveEventReso() {

var email 	= $("#email").val();
var res	= email.split("@");
var domain	= res(1);

alert(domain);

}