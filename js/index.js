
function getPerson(){
	const person_db_string = localStorage.getItem('usuario');
	const person_db = JSON.parse(person_db_string);

	return person_db;
}


let people = localStorage.getItem('usuario')
? JSON.parse(localStorage.getItem('usuario'))
:[]

function limpiaInputs(){
	$('#nombre').val('');
	$('#correo').val('');
	$('#nickname').val('');
	$('#foto').val('');
}


$(document).ready(function(){

	$('#mibtn').on('click', function(){
		const nombre = $('#nombre').val();
		const correo = $('#correo').val();
		const nickname = $('#nickname').val();
		const foto = $('#foto').val();

		const person = {
			nombre,
			correo,
			nickname,
			foto
		}

		people.push(person);

		localStorage.setItem('usuario', JSON.stringify(people));
		console.log(JSON.parse(localStorage.getItem('usuario')));

		limpiaInputs();

	});


	$('#verUsers').on('click', function(){
		window.open('usuarios.php', '_self');
	});

	

})