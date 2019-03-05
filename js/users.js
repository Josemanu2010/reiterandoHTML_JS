
function getPerson(){
	const person_db_string = localStorage.getItem('usuario');
	const person_db = JSON.parse(person_db_string);

	return person_db;
}


function painPerson(people){
	$('#master').val('');

	let html = '';

	people.forEach(persona => {
		html += `
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div id="foto">
							<img src="${persona.foto}" alt="" class="card-img-top">
						</div>
					</div>
					<div class="card-body">
						<strong>Usuario</strong>
						<button class="btn btn-dark">${persona.nickname}</button>
						<hr>
						<strong>Correo</strong>
						<button type="" class="btn btn-dark">${persona.correo}</button>
					</div>
					<div class="card-footer">
						<strong>Nombre</strong>
						<button class="btn btn-warning">${persona.nombre}</button>
					</div>
				</div>
			</div>
		`;

	})

	$('#master').html(html);

}


$(document).ready(function(){
	const damePerson = getPerson();
	painPerson(damePerson);
});


