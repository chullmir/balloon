var theForm = document.getElementById('registerForm');
var elementsOfForm = theForm.elements;
var elementsInArray = Array.from(elementsOfForm);
elementsInArray.pop();
elementsInArray.forEach(function(element){
	element.addEventListener("blur",function(){
		if (this.value == "") {
			this.classList.add("is-invalid");
		}
	})
});
// var inputName = document.querySelector("input[name='nombre']");
// var inputLastName = document.querySelector("input[name='lastname']");
// var inputCountry = document.querySelector("input[name='country']");
// var inputEmail = document.querySelector("input[name='email']");
// var inputPassword = document.querySelector("input[name='password']");
// theForm.onsubmit = function(event){
// 	if (inputName.value = "") {
// 		event.preventDefault();
// 		inputName.classList.add('error');

// 	}
// };

// var nombre = document.getElementById('nombre');
// var blankName = document.getElementById('blankName');
// nombre.onblur = function(){
// 	if (this.value == "") {
// 		blankName.setAttribute('class','error');
// 	} else {
// 		blankName.setAttribute('class','d-none');
// 	}
// };

// var lastname = document.getElementById('lastname');
// var blankLastName = document.getElementById('blankLastName');
// lastname.onblur = function(){
// 	if (this.value == "") {
// 		blankLastName.setAttribute('class','error');
// 	} else {
// 		blankLastName.setAttribute('class','d-none');
// 	}
// }

// // fetch("https://restcountries.eu/rest/v2/all"){
// // 	.then(function (response){
// // 		return response.json();
// // 	})
// // }