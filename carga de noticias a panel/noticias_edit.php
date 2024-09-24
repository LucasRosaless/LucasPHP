<?php
include_once("inc/conexion.php");
include_once("control_sesion.php");
extract($_GET);
extract($_POST);
$id = $_GET['id'];
$registro = tomarRegistro($mysqli, "noticias", "id = '$id'");
$catssss = tomarRegistros($mysqli, "categorias", "orden", "ASC");
$galeria = tomarRegistrosCondicion($mysqli, "imagen_noticias", "id", "desc", "id_noticia='$id'");

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title>Simplicity</title>

	<!-- Favicon -->
	<link rel="icon" href="assets/gostreaming/log-DarkOrange.png" type="image/x-icon" />

	<!-- Icons css -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!--  Owl-carousel css-->
	<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

	<!--  Custom Scroll bar-->
	<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--  Right-sidemenu css -->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!-- Sidemenu css -->
	<link rel="stylesheet" href="assets/css/sidemenu1.css">

	<!-- Maps css -->
	<link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

	<!-- style css -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-dark.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="assets/css/skin-modes.css" rel="stylesheet" />
	<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var maxField = 5; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div><input name="id_img[]" type="hidden" /> <input type="file" name="img[]"  /><a href="javascript:void(0);" class="remove_button" title="Remove field"> Quitar </a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function() { //Once add button is clicked
				if (x < maxField) { //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e) { //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
	</script>

</head>

<body class="main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<!-- main-sidebar -->
		<?php include("sidebar.php"); ?>
		<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- main-header -->
			<?php include("header.php"); ?>
			<!-- /main-header -->

			<!-- container -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">NOTICIAS</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
						</div>
					</div>
					<!--
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							
						</div>
						-->
				</div>
				<!-- breadcrumb -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0"><?= $registro['nombre']; ?> </h4>




								</div>
								<p class="tx-12 tx-gray-500 mb-2">Puedes realizar gestiones sobre cualquiera de ellos con tu selección </p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<?php if (count($registro) == 0) {
										echo "<center><br><br><br><br>El registro que estás consultando no existe<br><br><br><br></center>";
									} else { ?>



										<form action="noticias_edit_java.php" method="post" enctype="multipart/form-data" name="form1">
											<table width="100%" cellpadding="8" cellspacing="2">
												<thead>
												</thead>
												<tbody>
													<tr class="alt">
														<td width="100%" colspan="3">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">




																<tr>
																	<td>Titulo</td>
																</tr>
																<tr>
																	<td>

																		<label class="field" style="width:100%">
																			<textarea name="titulo" cols="1" rows="1" id="titulo" style="width:100%" maxlength="200"><?php echo $registro["titulo"]; ?></textarea>
																		</label>


																</tr>
																<tr>
																	<td>Encabezado</td>
																</tr>
																<tr>
																	<td><label class="field" style="width:100%">
																			<textarea name="encabezado" cols="1" rows="3" id="encabezado" style="width:100%"><?php echo $registro["encabezado"]; ?></textarea>
																		</label></td>
																</tr>

																<tr>
																	<td>
																		Descripción
																		<label class="field" style="width:100%">
																			<textarea name="descripcion" cols="3" rows="10" id="descripcion" class="ckeditor" style="width:100%"><?php echo $registro["descripcion"]; ?></textarea>
																		</label>
																	</td>
																</tr>

																<tr>
																	<td>Link</td>
																</tr>
																<tr>
																	<td><label class="field" style="width:100%">
																			<textarea name="link" cols="1" rows="1" maxlength="500" id="link" style="width:100%"><?php echo $registro["link"]; ?></textarea>
																		</label></td>
																</tr>





																<td>Selecciona una categoria </td>
																<tr>
																	<td>
																		<select name="categoria" id="categoria">
																			<?
																			$nom = tomarRegistro($mysqli, "categorias", "id = '" . $registro['categoria'] . "'");
																			echo $nom['nombre']; ?>
																			<? foreach ($catssss as $cate) { ?>
																				<option value="<?= $cate['id']; ?>"><?= $cate['nombre']; ?></option>
																			<? } ?>
																		</select><br><br>
																	</td>
																</tr>

																<tr>
																	<td><label class="field" style="width:100%">
																			Sector de la noticia<br>
																			<select name="tipo" id="tipo">
																				<option value="<?= $registro['tipo']; ?>">
																					<? if ($registro['tipo'] == 1) {
																						echo "Slide de noticias";
																					};  ?>
																					<? if ($registro['tipo'] == 2) {
																						echo "Noticias Principales";
																					};  ?>
																					<? if ($registro['tipo'] == 3) {
																						echo "Noticias Destacadas";
																					};  ?>
																					<? if ($registro['tipo'] == 4) {
																						echo "Pie De Pagina";
																					};  ?>


																				</option>
																				<option value="1">Slide de noticias</option>
																				<option value="2">Noticias Principales</option>
																				<option value="3">Noticias Destacadas</option>
																				<option value="4">Pie De Pagina</option>

																			</select>
																		</label></td>
																</tr>





																<tr>
																	<td>
																		<br>Actualizar Imagen <? if ($registro['imagen'] != "") { ?> ../images/noticias/<?= $registro['imagen']; ?><? } ?>
																			<label class="field" style="width:100%">
																				<input type="file" name="fisico" id="fisico" />
																			</label>
																	</td>
																</tr>


																<tr>
																	<td>
																		<br>Actualizar Audio <? if ($registro['audio'] != "") { ?> ../images/noticias/<?= $registro['audio']; ?><? } ?>
																			<label class="field" style="width:100%">
																				<input type="file" name="audio" id="audio" /> | Borrar audio <input type="checkbox" id="borrar_audio" name="borrar_audio" value="1">
																			</label>
																	</td>
																</tr>

																<tr>
																	<td>

																		<br>Video<br>
																		Si la url del video es asi: https://www.youtube.com/watch?v=<font color="red"> B5oDG7bdRaQ</font>, solo debes usar la terminación después de la v=, es decir: B5oDG7bdRaQ
																		<label class="field" style="width:100%">
																			<input name="video" type="text" id="video" value="<?php echo $registro["video"]; ?>" style="width:100%">
																		</label>

																	</td>
																</tr>

																<tr>
																	<td>

																		<br>Fuente
																		<label class="field" style="width:100%">
																			<input name="fuente" type="text" id="fuente" value="<?= $registro["fuente"]; ?>" style="width:100%">
																		</label>

																	</td>
																</tr>



																<tr>
																	<td><BR><BR>GALERÍA DE LA NOTICIA ( <?= count($galeria); ?> fotos cargadas en esta noticia <? if (count($galeria) != 0) { ?>| <a href="galeria_noticia.php?id=<?= $id; ?>">Ver galería</a><? } ?> )<BR>


																	<div class="field_wrapper">
																		<div>
																			<input name="id_img[]" type="hidden" /> <input type="file" name="img[]" />
																			<a href="javascript:void(0);" class="add_button" title="Add field"> + </a>
																		</div>
																	</div>
																	<br><br><br><br>
																	</td>
																</tr>









																<tr>
																	<td>Estado de la noticia
																		<select name="mostrar" id="mostrar" style="width:100% ; padding: 15px">

																			<option value="<?= $registro['mostrar']; ?>">
																				<?
																				if ($registro['mostrar'] == "1") {
																					echo "Se muestra";
																				};
																				if ($registro['mostrar'] == "0") {
																					echo "No se muestra";
																				};

																				?>


																			</option>
																			<option value="1">Se muestra</option>
																			<option value="0">No Se muestra
																		</select>
																	</td>
																</tr>

																<tr>
																	<td>
																		<div class="text-dark lh20 fs18">Fecha</div>
																		<input name="fecha" type="date" id="fecha" max="2030-12-31" min="2000-01-01" step="1" value="<?php echo $registro["fecha"]; ?>" style="width:100%" style="width:100%">
																		&nbsp;
																	</td>
																</tr>

																<tr>
																	<td><span class="contentbox">
																			<input name="submit" type="submit" class="btn" value="Actualizar noticia" />
																			<input name="add" type="hidden" id="add" value="1" />
																			<input name="imagen_antes" type="hidden" id="imagen_antes" value="<?= $registro['imagen']; ?>" />
																			<input name="audio_antes" type="hidden" id="audio_antes" value="<?= $registro['audio']; ?>" />
																			<input name="id" type="hidden" id="id" value="<?= $id; ?>" />
																		</span></td>
																</tr>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</form>



									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<!-- /Container -->
				</div>
				<!-- /main-content -->

				<!-- Sidebar-right-->
				<div class="sidebar sidebar-right sidebar-animate">
					<div class="panel panel-primary card mb-0 box-shadow">
						<div class="tab-menu-heading border-0 p-3">
							<div class="card-title mb-0">Notifications</div>
							<div class="card-options ml-auto">
								<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
							</div>
						</div>
						<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
							<div class="tabs-menu ">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
									<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
									<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active " id="side1">
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-primary brround avatar-md">CH</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>New Websites is Created</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">30 mins ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-danger brround avatar-md">N</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Prepare For the Next Project</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-info brround avatar-md">S</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Decide the live Discussion</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">3 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-warning brround avatar-md">K</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Meeting at 3:00 pm</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">4 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-success brround avatar-md">R</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-pink brround avatar-md">MS</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center border-bottom p-3">
										<div class="">
											<span class="avatar bg-purple brround avatar-md">L</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">45 mintues ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
									<div class="list d-flex align-items-center p-3">
										<div class="">
											<span class="avatar bg-blue brround avatar-md">U</span>
										</div>
										<a class="wrapper w-100 ml-3" href="#">
											<p class="mb-0 d-flex ">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="tab-pane  " id="side2">
									<div class="list-group list-group-flush ">
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/1.jpg"></span>
											</div>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
											</div>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-3">
												<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div>
												<strong>Olivia</strong> Hey! there I' am available....
												<div class="small text-muted">
													12 mintues ago
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane  " id="side3">
									<div class="list-group list-group-flush ">
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Sidebar-right-->



				<!--Video Modal -->
				<!-- modal -->

				<!-- Footer opened -->
				<?php include("footer.php"); ?>
				<!-- Footer closed -->

			</div>
			<!-- End Page -->

			<!-- Back-to-top -->
			<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

			<!-- JQuery min js -->
			<script src="assets/plugins/jquery/jquery.min.js"></script>

			<!-- Bootstrap Bundle js -->
			<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

			<!--Internal  Chart.bundle js -->
			<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

			<!-- Ionicons js -->
			<script src="assets/plugins/ionicons/ionicons.js"></script>

			<!-- Moment js -->
			<script src="assets/plugins/moment/moment.js"></script>

			<!--Internal Sparkline js -->
			<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

			<!-- Moment js -->
			<script src="assets/plugins/raphael/raphael.min.js"></script>

			<!--Internal  Flot js-->
			<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
			<script src="assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
			<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
			<script src="assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
			<script src="assets/js/dashboard.sampledata.js"></script>
			<script src="assets/js/chart.flot.sampledata.js"></script>

			<!-- Custom Scroll bar Js-->
			<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

			<!--Internal Apexchart js-->
			<script src="assets/js/apexcharts.js"></script>

			<!-- Rating js-->
			<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
			<script src="assets/plugins/rating/jquery.barrating.js"></script>

			<!--Internal  Perfect-scrollbar js -->
			<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
			<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

			<!-- Eva-icons js -->
			<script src="assets/js/eva-icons.min.js"></script>

			<!-- right-sidebar js -->
			<script src="assets/plugins/sidebar/sidebar.js"></script>
			<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

			<!-- Sticky js -->
			<script src="assets/js/sticky.js"></script>
			<script src="assets/js/modal-popup.js"></script>

			<!-- Left-menu js-->
			<script src="assets/plugins/side-menu/sidemenu.js"></script>

			<!-- Internal Map -->
			<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
			<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

			<!--Internal  index js -->
			<script src="assets/js/index.js"></script>

			<!-- Apexchart js-->
			<script src="assets/js/apexcharts.js"></script>

			<!-- custom js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jquery.vmap.sampledata.js"></script>

</body>

</html>