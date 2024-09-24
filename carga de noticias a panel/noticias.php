<?php
include_once("inc/conexion.php");
include_once("control_sesion.php");
$registros = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc", "mostrar = '1'") ; 
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
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title>Simplicity</title>

		<!-- Favicon -->
		<link rel="icon" href="assets/gostreaming/log-DarkOrange.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--  Owl-carousel css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!--  Custom Scroll bar-->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

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



<script>
function confirmar()
{
	if(confirm('¿Estas seguro de eliminar este cliente?'))
		return true;
	else
		return false;
}
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
				<?php include("header.php") ; ?>
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


								<?php include("mensaje_error.php") ; ?>


								




								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Todos las noticias (<?=count($registros) ; ?>)</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-11 tx-gray-500 mb-2">Puedes realizar gestiones sobre cualquiera de ellos con tu selección </p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<?php if(count($registros) == 0) { echo '<center><br><br><br><br><p class="tx-11 tx-gray-500 mb-2">No existen registros cargados a la fecha</p><br><br><br><br></center>' ; }else{ ?>

										<table class="table text-md-nowrap" id="example1" style="font-size: 12px">
											<thead>
												<tr>
													<th class="wd-25p border-bottom-0">Titulo</th>
													<th class="wd-25p border-bottom-0">Encabezado</th>
													<th class="wd-10p border-bottom-0">Sector</th>
													<th class="wd-10p border-bottom-0">Categoria</th>
													<th class="wd-10p border-bottom-0">Video</th>
													<th class="wd-10p border-bottom-0">Imagen</th>
													<th class="wd-10p border-bottom-0">Accion</th>
												</tr>
											</thead>
											<tbody>
											
												<?php foreach($registros as $registro): ?>
												<tr>
													<td><? if($registro['mostrar'] == "0") { ?><font color="red"><? } ?><?=$registro['titulo'] ; ?> </font>
													<? if($registro['estado'] == "0") { ?><i class="mdi mdi-account-off"></i><? } ?>
												
													
													</td>
													<td><? if($registro['estado'] == "0") { ?><font color="red"><? } ?><?=substr($registro['encabezado'],0,90) ; ?>...</td>
													<td><? if($registro['estado'] == "0") { ?><font color="red"><? } ?>

													<? if($registro['tipo'] == 1) { echo "Slide, destacadas" ; } ;  ?>
					                            	<? if($registro['tipo'] == 5) { echo "slide x 3" ; } ?>
													<? if($registro['tipo'] == 2) { echo "Noticias generales" ; }  ?>
													<? if($registro['tipo'] == 3) { echo "Noticias Principales" ; } ?>
					                            	<? if($registro['tipo'] == 4) { echo "Videos" ; } ?>
					                            	<? if($registro['tipo'] == 6) { echo "Categorias" ; } ?>
					                            	<? if($registro['tipo'] == 7) { echo "+Noticias" ; } ?>
					                            </td>
													<td><? if($registro['estado'] == "0") { ?><font color="red"><? } ?>
													<?
													  $nom = tomarRegistro($mysqli, "categorias","id = '".$registro['categoria']."'") ; 
													   echo $nom['nombre'] ; 
													?>
													</td>
													<td><? if($registro['estado'] == "0") { ?><font color="red"><? } ?><?=$registro['video'] ; ?></td>
													<td><? if($registro['estado'] == "0") { ?><font color="red"><? } ?><a href="../images/noticias/<?=$registro['imagen'] ; ?>" target="_blank"><?=$registro['imagen'] ; ?></a></td>
</font>

													<td style="font-size: 14px">
														
														<a href="noticias_edit.php?id=<?=$registro['id'] ; ?>" title="Editar cliente"><i class="far fa-eye"></i> </a>

														<a href="noticias_delete.php?id=<?=$registro['id'] ; ?>" title="Eliminar cliente"  onclick="return confirmar()"><i class="far fa-eye-slash"></i> </a>

														
														
													</div>




													</td>



												</tr>
												<?php endforeach ; ?>
												
												
											</tbody>
										</table>
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
									<a class="wrapper w-100 ml-3" href="#" >
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
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
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
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
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
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
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
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
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
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
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
			<?php include("footer.php") ; ?>
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