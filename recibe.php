<?php 

# Obteniendo datos mediante el metodo POST

// print_r($_POST);

// if (!$_POST) {
// 	header('Location: http://localhost/curso_php/formularios/');
// }

// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' eres ' . $sexo;


# Obteniendo datos mediante el metodo GET

// print_r($_GET);

if (!$_GET) {
	header('Location: http://localhost/curso_php/formularios/');
}


$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre){
	echo $nombre . '<br />';
} else {
	echo "El usario no establecio su nombre <br>";
}
if ($apellido){
	echo $apellido . '<br />';
} else {
	echo "El usario no establecio su apellido <br>";
}
if ($sexo){
	echo $sexo . '<br />';
} else {
	echo "El usario no establecio su sexo <br>";
}
if ($year){
	echo $year . '<br />';
} else {
	echo "El usario no establecio su edad <br>";
}
if ($terminos){
	echo $terminos . '<br />';
} else {
	echo "No aceptatste los terminos <br>";
}



?>