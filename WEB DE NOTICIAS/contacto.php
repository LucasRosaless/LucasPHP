<?
include_once("inc/conexion.php");
include("parts/fecha.php");

$categorias = tomarRegistros($mysqli, "categorias", "id", "asc");

//-----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
$masvistas = tomarRegistros($mysqli, "noticias", "visualizaciones", "desc limit 10");
$tec = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '31'");
$nac = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '13'");
$inter = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '12'");
//-----------------


$social = tomarRegistro($mysqli, "social", "id");
$contact = tomarRegistro($mysqli, "contacto", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc limit 6");
$cates = tomarRegistros($mysqli, "categorias", "id", "desc");


?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:45:14 GMT -->

<head>
	<title><?= $contact["nombre_radio"]; ?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>

<body>

	<!-- Container -->
	<div id="container">

		<!-- Header -->
		<? include("parts/header.php"); ?>
		<!-- End Header -->


		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- contact info box -->
						
							<!-- End contact info box -->

							<!-- contact form box -->
							<div class="contact-form-box">
								<div class="title-section">
									<h1><span>Contactate</span></h1>
								</div>
								<form id="contact-form">
									<div class="row">
										<div class="col-md-4">
											<label for="name">Nombre*</label>
											<input id="name" name="name" type="text">
										</div>
										<div class="col-md-4">
											<label for="mail">E-mail*</label>
											<input id="mail" name="mail" type="text">
										</div>
										
									</div>
									<label for="comment">Su mensaje*</label>
									<textarea id="comment" name="comment"></textarea>
									<button type="submit" id="submit-contact">
										<i class="fa fa-paper-plane"></i> Envia Mensaje
									</button>
								</form>
							</div>
							<!-- End contact form box -->
						</div>
						<!-- End block content -->

					</div>

				

					<?include("parts/columder.php");?>

					

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->


		<!-- footer  -->
		<? include("parts/footer.php"); ?>
		<!-- End footer -->


	</div>
	<!-- End Container -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:45:14 GMT -->

</html>