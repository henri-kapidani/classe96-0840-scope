let name = 'pippo';
stampaNome();

function stampaNome(name = 'ciao') {
	console.log(name);
}

// js arrow functions
name => console.log(name);

name => {
	console.log(name);
}