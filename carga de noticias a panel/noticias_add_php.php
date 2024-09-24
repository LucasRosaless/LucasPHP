<?php
include_once("inc/conexion.php");
include_once("control_sesion.php");
extract($_POST);
$hora= date("H:i:s");
$ano = date("Y");
$fecha2 = date("Y-m-d");
$tabla= "noticias";

	$fisico = $_FILES["fisico"];

	if($_FILES['fisico']['name'] == null){
	$fisico = $_POST['imagen_antes'] ; 

	}else{ 

	$fisico = $_FILES["fisico"] ; 
	$valores = explode(".", $fisico["name"]);
	$nombre = $valores[0];
	$extension = end($valores);
	$random = rand(999,10000);
	$new_name1 = $random.".".$extension;
		
	move_uploaded_file($_FILES["fisico"]["tmp_name"], "../images/noticias/" . $new_name1); 
	$fisico = $new_name1;  
		
	} 


	if($_FILES['audio']['name'] == null){
	$audio = $_POST['audio_antes'] ; 

	}else{ 

	$audio = $_FILES["audio"] ; 
	$valoresa = explode(".", $audio["name"]);
	$nombrea = $valoresa[0];
	$extensiona = end($valoresa);
	$randoma = rand(999,10000);
	$new_namea = $randoma.".".$extensiona;
		
	move_uploaded_file($_FILES["audio"]["tmp_name"], "../images/noticias/" . $new_namea); 
	$audio = $new_namea;  
		
	}

	if($fecha == "") { $fecha = $fecha2 ; }




	$sql = "INSERT INTO ".$tabla." (titulo, encabezado, descripcion, tipo, categoria, imagen, video, fuente, fecha, hora, mostrar, audio)
							VALUES('".addslashes($titulo)."', '".addslashes($encabezado)."', '".addslashes($descripcion)."', '$tipo', '$categoria', '$fisico', '$video', '$fuente', '$fecha', '$hora', '1', '$audio')";

	if(!$resultado = $mysqli->query($sql)){
	$mensaje_error = 'Algo salio mal, no se creo la noticia';
	
	}else{
		$mensaje_error = 'Se pudo crear la noticia correctamente';

		$ide = tomarRegistros($mysqli, $tabla, "id", "desc");  
		$ide = $ide[0]["id"];

		$tildados = $_POST['id_img'] ;		
		$num = count($_FILES['img']['name']);

		for($i = 0; $i < $num; $i++) {
			move_uploaded_file($_FILES['img']['tmp_name'][$i], "archivos/".$_FILES['img']['name'][$i]);


			$sql = "INSERT INTO imagen_noticias (imagen, id_noticia, mostrar) VALUES('".$_FILES['img']['name'][$i]."', '$ide', '1')";
			if(!$resultado = $mysqli->query($sql)){
				$mensaje_error_eroi = 'Algo salio mal';
			}else{
				$mensaje_error_eroi = 'Se subieron las imagenes de galeria de la noticia seleccionada';
			}

		}

		
	}	

?>


<script language="javascript">
window.location.href = 'noticias.php?seccion=NOTICIAS&mensaje_error=<?=$mensaje_error; ?>';
</script>
