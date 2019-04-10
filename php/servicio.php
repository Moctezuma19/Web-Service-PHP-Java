<?php
 
// incluyendo la librería de nusopa
require_once('./nusoap/lib/nusoap.php');
 
// Configurando el web service
$server = new soap_server();
$server->configureWSDL("SaludoXML", "urn:SaludoXMLwsdl");
$server->wsdl->schemaTargetNamespace = "urn:SaludoXMLwsdl";
 
// Nuestra función que proporcionaremos
function Saludar($nombre) {
    return 'Hola ' . trim($nombre);
}
function Factorial($numero) {
	$aux = (int)$numero;
	if ($aux == 0) {
		return 1;
	}
	return $aux * factorial ($aux - 1);
}
 
// Registrando nuestra función Saludar con su parámetro nombre
$server->register(
        'Saludar', // Nombre del método
        array('nombre' => 'xsd:string'), // Parámetros de entrada
        array('return' => 'xsd:string'), // Parámetros de salida
        'urn:SaludoXMLwsdl', // Nombre del workspace
        'urn:SaludoXMLwsdl#Saludar', // Acción soap
        'rpc', // Estilo
        'literal', // Uso
        'Saluda a la persona' // Documentación
);

$server->register(
        'Factorial', // Nombre del método
        array('numero' => 'xsd:string'), // Parámetros de entrada
        array('return' => 'xsd:string'), // Parámetros de salida
        'urn:FactorialXMLwsdl', // Nombre del workspace
        'urn:FactorialXMLwsdl#Factorial', // Acción soap
        'rpc', // Estilo
        'literal', // Uso
        'Funcion que calcula el factorial' // Documentación
);
 
//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA: '';
@$server->service(file_get_contents("php://input"));
//$server->service($HTTP_RAW_POST_DATA);
?>