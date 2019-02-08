var theForm = document.getElementById('registerForm');
var elementsOfForm = theForm.elements;
var elementsInArray = Array.from(elementsOfForm);
var errorForm = 0;
elementsInArray.pop();
elementsInArray.forEach(function(element){
	element.addEventListener("blur",function(){
		if (this.value == "") {
			this.classList.add("is-invalid");
		}
	})
});
// theForm.onsubmit = function(event){
// 	for (var i = 0; i < elementsInArray.length; i++) {
// 		if (elementsInArray[i].value == "") {
// 			errorForm = 1;
// 		}
// 	}
// 	if (errorForm == 1) {
// 		event.preventDefault();
// 	}
// }

// var datos;
// var ajaxCall = new XMLHttpRequest();
// ajaxCall.open('GET','https://restcountries.eu/rest/v2/all');
// ajaxCall.send();


// ajaxCall.onreadystatechange = function(){
// 	if(ajaxCall.readyState == 4 && ajaxCall.status == 200){
// 		var datos = JSON.parse(ajaxCall.responseText);
// 	}
// }
