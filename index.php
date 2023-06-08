<?php

// php arrow functions (return e use impliciti)
$arrow_stampa_nome = fn ($name) => 'Mr. ' . $name;

$name = 'pippo';
echo stampa_nome($name);
echo $arrow_stampa_nome($name);

function stampa_nome($name = 'il tuo nome') {
	// var_dump($_GET);
	// var_dump($name);
	return 'Mr. ' . $name;
	// il codice dopo il return è irragiungibile
	var_dump($name);
}
