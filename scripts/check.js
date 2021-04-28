window.onload = function() {
	var send = document.getElementById("send");
	if (send) {
		send.disabled = false;
	}
};

function check() {
	var ok = true;
	var foc = null;

	var text = document.getElementById("text");
	if (text) {
		if (text.value.length==0 || text.value.length>100) {
			ok = false;
			text.style.background = '#f99';
			foc = text;
		} else {
			text.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value) || email.value.length>50) {
			ok = false;
			email.style.background = '#f99';
			foc = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var name = document.getElementById("name");
	if (name) {
		if (name.value.length<5 || name.value.length > 45) {
			ok = false;
			name.style.background = '#f99';
			foc = name;
		} else {
			name.style.background = '#9f9';
		}
	}

	if (foc) {
		foc.focus();
	}
    
	return ok;
}
