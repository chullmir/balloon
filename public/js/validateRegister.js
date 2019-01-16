var nombre = document.getElementById('nombre');
var blankName = document.getElementById('blankName');
nombre.onblur = function(){
	if (this.value == "") {
		blankName.setAttribute('class','error');
	} else {
		blankName.setAttribute('class','d-none');
	}
};

var lastname = document.getElementById('lastname');
var blankLastName = document.getElementById('blankLastName');
lastname.onblur = function(){
	if (this.value == "") {
		blankLastName.setAttribute('class','error');
	} else {
		blankLastName.setAttribute('class','d-none');
	}
}

fetch("https://restcountries.eu/rest/v2/all"){
	.then(function (response){
		return response.json();
	})
}