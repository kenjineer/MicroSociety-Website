if (reg == "NOT REGISTERED") {
	document.getElementById("register").disabled = false;
} else if (reg == "PENDING" || reg == "REGISTERED") {
	document.getElementById("register").disabled = true;
}