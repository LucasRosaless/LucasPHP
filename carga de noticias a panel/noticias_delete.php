<?php
include_once("inc/conexion.php");
include_once("control_sesion.php");
extract($_GET) ; extract($_POST) ; 

$tabla= "noticias";

if (isset($_GET["id"])) { //se envio la consulta

	$id = $_GET["id"];
	
	$sql = "DELETE FROM ".$tabla." WHERE id = '$id'";
	
	
	if(!$resultado = $mysqli->query($sql)){
		$mensaje_error = 'Algo Salio mal';
	}else{
		$mensaje_error = 'Se pudo eliminar el registro correctamente';
	}
							
	//header("Location: ".$url."&error=".$mensaje);
	
}


?>
<script language="javascript">
window.location.href = 'noticias.php?seccion=NOTICIAS&&&mensaje_error=<?=$mensaje_error ; ?>';
</script>