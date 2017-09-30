function checkForm() {
	return checkQuantities() && checkEmail() && checkPassword() && checkShipping();
}

function checkQuantities() {
	var shirtQ = document.getElementById("shirtQuantity").value;
	var hatQ = document.getElementById("hatQuantity").value;
	var bottleQ = document.getElementById("bottleQuantity").value;
	
	if(!Number.isInteger(parseFloat(shirtQ)) || shirtQ < 0) {
		alert("Please enter a valid shirt quantity");
		return false;
	}
	
	if(!Number.isInteger(parseFloat(hatQ)) || hatQ < 0) {
		alert("Please enter a valid hat quantity");
		return false;
	}
	
	if(!Number.isInteger(parseFloat(bottleQ)) || bottleQ < 0) {
		alert("Please enter a valid bottle quantity");
		return false;
	}
	
	if(shirtQ == 0 && hatQ == 0 && bottleQ == 0) {
		alert("You must order at least one item before you submit");
		return false;
	}
	
	return true;
}

function checkEmail() { //written using the General Email Regex (RFC 5322) source: http://emailregex.com/
	var email = document.getElementById("email").value;
	
	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(email.match(regex) == null) {
		alert("Please enter a valid email address");
		return false;
	}
	
	return true;
	
}

function checkPassword() {
	if(document.getElementById("password").value == "") {
		alert("Please enter a password");
		return false;
	} 
	
	return true;
}

function checkShipping() {
	if(document.getElementById("option1").checked == false && document.getElementById("option2").checked == false && document.getElementById("option3").checked == false) {
		alert("Please select a shipping option");
		return false;
	}
	return true;
}