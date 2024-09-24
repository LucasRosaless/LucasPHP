<?
@session_start();
include_once("config.php");
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_bd);

if($mysqli->connect_errno){
	printf("No se pudo conectar a la base de datos: %s \n", $mysqli->connect_errno);
	exit();
}

extract($_POST);

include_once("lib_funciones.php");  
$contacto = tomarRegistro($mysqli, "contacto", "id = '1'") ; 
$social = tomarRegistro($mysqli, "social", "id = '1'") ; 
?>
