<?php
//lib_funciones
//colopsx@hotmail.com
//funciones simples para trabajar con mysql sin definir clases

function make_array($query){
	$array = array();
	if($query->num_rows > 0){
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$array[] = $row;
		}
	}
	return $array;
}//ffcion



function tomarRegistros($mysqli, $tabla, $campoOrden, $orden) {
	//devuelve falso si no proceso o sino el array de elementos
	$sql = "SELECT * FROM $tabla ORDER BY $campoOrden $orden";
	if(!$resultado = $mysqli->query($sql)){
		$mensaje = false;
	}else{
		$mensaje = make_array($resultado);
	}
	return $mensaje;		
}//ffcion


function tomarRegistrosCondicion($mysqli,$tabla,$campoOrden, $orden, $condicion) { //condicion puede ser id = '23', etc	
	$sql = "SELECT * FROM $tabla WHERE $condicion ORDER BY $campoOrden $orden";
	if(!$resultado = $mysqli->query($sql)){
		$mensaje = false;
	}else{
		$mensaje = make_array($resultado);
	}
	return $mensaje;		
}//ffcion


function tomarRegistro($mysqli, $tabla, $condicion) {
	
	$sql = "SELECT * FROM $tabla WHERE $condicion";
	if(!$resultado = $mysqli->query($sql)){
		$mensaje = false;
	}else{
		$mensaje = $resultado->fetch_assoc();
	}
	return $mensaje;	
}//ffcion

function CroppedThumbnailJPEG($mysqli, $imgSrc, $thumnail_save_path, $thumbnail_width, $thumbnail_height, $quality = 100) {

    if (file_exists($thumnail_save_path)) {
				//existe la imagen, para qué joraca la voy a recortar de nuevo?
	}else{
				//no existe la imagen, hago el fucking proceso
				list($width_orig, $height_orig) = getimagesize($imgSrc);
				$myImage = imagecreatefromjpeg($imgSrc);
				$ratio_orig = $width_orig/$height_orig;
			
				if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
				   $new_height = $thumbnail_width/$ratio_orig;
				   $new_width = $thumbnail_width;
				} else {
				   $new_width = $thumbnail_height*$ratio_orig;
				   $new_height = $thumbnail_height;
				}
			
				$x_mid = $new_width/2;
				$y_mid = $new_height/2;
			
				$process = imagecreatetruecolor(round($new_width), round($new_height)); 
			
				imagecopyresampled($mysqli, $process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
				$thumb = imagecreatetruecolor($mysqli, $thumbnail_width, $thumbnail_height);
				imagecopyresampled($mysqli, $thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			
				imagedestroy($process);
				imagedestroy($myImage);
				//guardar en directorio actual
				imagejpeg($thumb,$thumnail_save_path,$quality);
				imagedestroy($thumb);
	}	//si existe o no la imgen		
}//ffcion


function enviarMail($mailEmisor, $nombreDe, $mailReceptor, $asunto, $mensaje){ //devuelve verdadero o falso segun se envie o no el mail
	
	@require("class.phpmailer.php");
	
	$mail = new phpmailer();

	$mail->IsMail();  // send via SMTP
	$mail->Host     = "localhost"; // SMTP servers

	$mail->From     = $mailEmisor; //mail al que se respondera
	
	$mail->FromName = $nombreDe; //nombre que aparece en el campo DE


	$email_contenedor = $mailReceptor; //kame hame ha
	$mail->AddAddress($email_contenedor); // para agregar direcciones , a quien le llega

	$mail->WordWrap = 150;                              // set word wrap
	$mail->IsHTML(true);                               // send as HTML

	$mail->Subject  = $asunto;
	$mail->Body     = $mensaje; // PUEDE SER CODIGO HTML SI SE ASIGNA IsHTML(true);
	if($mail->Send()) 
	{ return true; 
	}else {
		return false; //no se ha enviado el mail 
	}
	
}



function enviarMail2($mailEmisor, $nombreDe, $mailReceptor, $asunto, $mensaje){ //devuelve verdadero o falso segun se envie o no el mail
	
	
	
	$mail = new phpmailer();

	$mail->IsMail();  // send via SMTP
	$mail->Host     = "localhost"; // SMTP servers

	$mail->From     = $mailEmisor; //mail al que se respondera
	
	$mail->FromName = $nombreDe; //nombre que aparece en el campo DE


	$email_contenedor = $mailReceptor; //kame hame ha
	$mail->AddAddress($email_contenedor); // para agregar direcciones , a quien le llega

	$mail->WordWrap = 150;                              // set word wrap
	$mail->IsHTML(true);                               // send as HTML

	$mail->Subject  = $asunto;
	$mail->Body     = $mensaje; // PUEDE SER CODIGO HTML SI SE ASIGNA IsHTML(true);
	if($mail->Send()) 
	{ return true; 
	}else {
		return false; //no se ha enviado el mail 
	}
	
}//ffcion



function paginar ($url,$inicio,$por_pagina,$total){
	$total_paginas = ceil($total / $por_pagina);
	$html = "";
	if ($total_paginas>1){
		$guion = "";
		$cero = 0;
		for ($i = 1;$i<=$total_paginas;$i++){
			$aux = str_replace('pagina='.$inicio,'pagina='.($i),$url);
			//$aux = str_replace('por_pagina=10','por_pagina=10',$url);
			if ($i == $inicio){
				$html.= " $guion <a href='#' style='color:#10713C; font-weight:bold;'>$i</a> ";
			} else {
				$html.= "$guion  <a href='$aux'>$i </a> ";
			}
			$guion = " . ";
		}
	}	
	//echo "html ".$html;
	return $html;
}//ffcion


function nombreDia(){
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Miércoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";
return $dia;
}


function nombreMes() {
// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";
return $mes;
}


function subirImagenJava($ruta, $fotos, $tabla, $nombreCampo, $idCampo, $ide, $mensaje) {
		//$ruta = "../images/fotos/"; //$fotos = $_FILES['archivos'] //$tabla = "imagenesClasificados
		//$nombreCampo = "nombre"  //$idCampo = "idClasificado"  //$ide="1" //$mensaje = $mensaje
	
//parche subida de imagenes con java********************************************************************************
	
	
	
	 
	  if($fotos !="") {
			 foreach ($fotos["name"] as $id => $foto) 
	{

	
	
	  
	  //if  (!($foto["name"][$i] == ""))
	  if  (!($fotos["name"][$id] == ""))
	  {
	  	   //Significa que se cargó el file, no está vacío
	    
		 
		 
	   
		
		$random = rand(0,9000);
		 //RENOMBRAR EL ARCHIVO
				$new_name = $random."_".$fotos["name"][$id];
				
			//COPIO EL ARCHIVO AL DIRECTORIO
				if (copy($fotos["tmp_name"][$id],$ruta.$new_name)){
				 //INSERTAR EL ARCHIVO A LA BASE DE DATOS
					
					
					
					////
					
					
		
		
		
					$sql = "INSERT INTO $tabla ($nombreCampo, $idCampo) values ('$new_name', '$ide')";
					$query = mysql_query($sql);
					
					
					
					////
					
					
					
					
					$mensaje.="La imagen ".$fotos["name"][$id]." fue agregada con exito.<br />";
				} else {
					$mensaje.="La imagen ".$new_name." NO fue agregada con exito.<br />";
				}
		
		
		//echo "";
      }
	  $i= $i+1; //subo el índice
	} //fin foreach  
	
	}
	
	
	return $mensaje;
	
	
	///fin parche subidas con java*****************************************************************
}//ffcion




function subirImagen($mysqli, $imagen,$url) {
	
	//$imagen =$_FILES["imagen"];
		
		// IMAGEN
			if ($imagen["name"] != ""){
				$random = rand(999,10000);
				$new_name = $random."_".$imagen["name"];
			
				if (copy($imagen["tmp_name"],$url.$new_name)){
					
					$mensaje.="La imagen fue agregada con exito. ";
				} else {
					$mensaje.="La imagen NO fue agregada. ";
					$new_name = "";
				}
		
		      } 
		// FIN IMAGEN	
	return $new_name;
	
}


function subirImagenJavaConLink($ruta, $fotos, $tabla, $nombreCampo, $idCampo, $ide, $mensaje, $link) {
		//$ruta = "../images/fotos/"; //$fotos = $_FILES['archivos'] //$tabla = "imagenesClasificados
		//$nombreCampo = "nombre"  //$idCampo = "idClasificado"  //$ide="1" //$mensaje = $mensaje
	
//parche subida de imagenes con java********************************************************************************
	
	
	
	 
	  if($fotos !="") { $posicion = 0;
			 foreach ($fotos["name"] as $id => $foto) 
	{

	
	
	  
	  //if  (!($foto["name"][$i] == ""))
	  if  (!($fotos["name"][$id] == ""))
	  {
	  	   //Significa que se cargó el file, no está vacío
	    
		 
		 
	   
		
		$random = rand(0,9000);
		 //RENOMBRAR EL ARCHIVO
				$new_name = $random."_".$fotos["name"][$id];
				
			//COPIO EL ARCHIVO AL DIRECTORIO
				if (copy($fotos["tmp_name"][$id],$ruta.$new_name)){
				 //INSERTAR EL ARCHIVO A LA BASE DE DATOS
					
					
					
					////
					
					
		
					$linkPuesto = $link[$posicion];
		
					$sql = "INSERT INTO $tabla ($nombreCampo, $idCampo, link) values ('$new_name', '$ide', '$linkPuesto')";
					$query = mysql_query($sql);
					
					
					
					////
					
					
					
					
					$mensaje.="La imagen ".$fotos["name"][$id]." fue agregada con exito.<br />";
				} else {
					$mensaje.="La imagen ".$new_name." NO fue agregada con exito.<br />";
				}
		
		
		//echo "";
      }
	  $i= $i+1; //subo el índice
	  $posicion++;
	} //fin foreach  
	
	}
	
	
	return $mensaje;
	
	
	///fin parche subidas con java*****************************************************************
}//ffcion


function subirImagenJavaConLinkTexto($ruta, $fotos, $tabla, $nombreCampo, $idCampo, $ide, $mensaje, $link, $texto, $titulo, $orden) {
		//$ruta = "../images/fotos/"; //$fotos = $_FILES['archivos'] //$tabla = "imagenesClasificados
		//$nombreCampo = "nombre"  //$idCampo = "idClasificado"  //$ide="1" //$mensaje = $mensaje
	
//parche subida de imagenes con java********************************************************************************
	
	
	
	 
	  if($fotos !="") { $posicion = 0;
			 foreach ($fotos["name"] as $id => $foto) 
	{

	
	
	  
	  //if  (!($foto["name"][$i] == ""))
	  if  (!($fotos["name"][$id] == ""))
	  {
	  	   //Significa que se cargó el file, no está vacio
	    
		 
		 
	   
		
		$random = rand(0,9000);
		 //RENOMBRAR EL ARCHIVO
				$new_name = $random."_".$fotos["name"][$id];
				
			//COPIO EL ARCHIVO AL DIRECTORIO
				if (copy($fotos["tmp_name"][$id],$ruta.$new_name)){
				 //INSERTAR EL ARCHIVO A LA BASE DE DATOS
					
					
					
					////
					
					
		
					$linkPuesto = $link[$posicion];
					$textoPuesto = $texto[$posicion];
					$ordenPuesto = $orden[$posicion];
					$tituloPuesto = $titulo[$posicion];
		
					$sql = "INSERT INTO $tabla ($nombreCampo, $idCampo, link, texto, orden, titulo) values ('$new_name', '$ide', '$linkPuesto', '$textoPuesto', '$ordenPuesto', '$tituloPuesto')";
					$query = mysql_query($sql);
					
					
					
					////
					
					
					
					
					$mensaje.="La imagen ".$fotos["name"][$id]." fue agregada con exito.<br />";
				} else {
					$mensaje.="La imagen ".$new_name." NO fue agregada con exito.<br />";
				}
		
		
		//echo "";
      }
	  $i= $i+1; //subo el indice
	  $posicion++;
	} //fin foreach  
	
	}
	
	
	return $mensaje;
	
	
	///fin parche subidas con java*****************************************************************
}//ffcion





?>