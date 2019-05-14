// var ajaxCall = new XMLHttpRequest();
// //2. Pedimos los datos con el método elegido
// ajaxCall.open('GET','https://restcountries.eu/rest/v2/all');
// // ajaxCall.onload = function(){
// // 	console.log(ajaxCall);
// // }
// ajaxCall.onreadystatechange = function(){
// 	if (ajaxCall.readyState == 4 && ajaxCall.status ==200) {
// 		var datos = JSON.parse(ajaxCall.responseText);
// 		for (var i = 0; i < datos.length; i++) {
// 			var elemento = document.createElement('option');
// 			elemento.innerHTML += datos[i].name;
// 			document.getElementById('country').appendChild(elemento);
// 		}
// 	}
// }
// ajaxCall.send();


fetch('https://restcountries.eu/rest/v2/all')
	.then(function(countries) {
		return countries.json();
	})
	.then(function(countries) {
		// console.log(countries.length);
		for (var i = 0; i < countries.length; i++) {
			var elemento = document.createElement('option');
			elemento.innerHTML += countries[i].name;
			document.getElementById('country').appendChild(elemento);
		}
	})
	.catch(function(error) {
		console.log("The error was: " + error);
	});

var paisElegido = document.getElementById('country');
paisElegido.addEventListener('change',function(){

	if (this.value == "Argentina") {
		var provincia = document.getElementById('provForm');
		provincia.classList.remove('d-none');

		fetch('https://dev.digitalhouse.com/api/getProvincias')
		.then(function(provincias) {
			return provincias.json();
		})
		.then(function(provincias) {
			// console.log(provincias.data);
			for (var i = 0; i < provincias.data.length; i++) {
				var elemento = document.createElement('option');
				elemento.innerHTML += provincias.data[i].state;
				document.getElementById('provincia').appendChild(elemento);
			}
		})
		.catch(function(error) {
			console.log("The error was: " + error);
		});

		
	} else {
		var provincia = document.getElementById('provForm');
		provincia.classList.add('d-none');
		document.getElementById('provincia').innerHTML = '';
		document.getElementById('provincia').innerHTML = '<option>Elegi</option>';
	}
});

// var listProvincias = new XMLHttpRequest();
// listProvincias.open('GET','https://dev.digitalhouse.com/api/getProvincias');
// listProvincias.onreadystatechange = function(){
// 	if (listProvincias.readyState == 4 && listProvincias.status ==200){
// 		var datos = JSON.parse(listProvincias.responseText);
// 		for (var i = 0; i < datos.length; i++) {
// 			var elemento = document.createElement('option');
// 			elemento.innerHTML += datos[i].state;
// 			document.getElementById('provincia').appendChild(elemento);
// 		}
// 	}
// }
// listProvincias.send();