var email = document.getElementById('email');
var password = document.getElementById('password');

var blankEmail = document.getElementById('blankEmail');
var blankPass = document.getElementById('blankPass');
email.onblur = function(){
	if (this.value == "") {
		blankEmail.setAttribute('class','error');
		// blankEmail.classList.toggle('d-none');
	} else {
		blankEmail.setAttribute('class','d-none');
	}
};
password.onblur = function(){
	if (this.value == "") {
		blankPass.setAttribute('class','error')
		// blankPass.classList.toggle('d-none');
	} else {
		blankPass.setAttribute('class','d-none');
	}
};
