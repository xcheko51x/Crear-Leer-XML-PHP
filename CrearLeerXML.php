<?php

//CrearXML();
LeerXML();

function LeerXML() {
	$usuarios = simplexml_load_file("/Users/xcheko51x/Downloads/usuarios.xml"); // Ruta del archivo XML

	foreach ($usuarios as $usuario) {
		echo "ID: " . $usuario->ID . "<br>";
		echo "Nombre: " . $usuario->NOMBRE . "<br>";
		echo "Telefono: " . $usuario->TELEFONO . "<br>";
		echo "Email: " . $usuario->EMAIL . "<br>";
	}
}

function CrearXML() {
	$doc = new DOMDocument('1.0');

	$doc->formatOutput = true;

	$raiz = $doc->createElement("USUARIOS");
	$raiz = $doc->appendChild($raiz);

	$usuario = $doc->createElement("USUARIO");
	$usuario = $raiz->appendChild($usuario);

	$id = $doc->createElement("ID");
	$id = $usuario->appendChild($id);
	$textId = $doc->createTextNode(1);
	$textId = $id->appendChild($textId);

	$nombre = $doc->createElement("NOMBRE");
	$nombre = $usuario->appendChild($nombre);
	$textNombre = $doc->createTextNode("Sergio");
	$textNombre = $nombre->appendChild($textNombre);

	$telefono = $doc->createElement("TELEFONO");
	$telefono = $usuario->appendChild($telefono);
	$textTelefono = $doc->createTextNode("4324245432");
	$textTelefono = $telefono->appendChild($textTelefono);

	$email = $doc->createElement("EMAIL");
	$email = $usuario->appendChild($email);
	$textEmail = $doc->createTextNode("sergio@hola.es");
	$textEmail = $email->appendChild($textEmail);

	echo 'Escrito: ' . $doc->save("/Users/xcheko51x/Downloads/usuarios.xml") . 'bytes <br><br>';
}

?>
