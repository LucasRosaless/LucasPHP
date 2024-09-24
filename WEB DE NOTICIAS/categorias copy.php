<?
include_once("inc/conexion.php");
include("parts/fecha.php");
$sec = $_GET['sec'];

if ($sec != "") {
	$not = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 12", "categoria = '$sec'");
} else {
	$not = tomarRegistros($mysqli, "noticias", "id", "desc limit 12");
}

$categoria = tomarRegistro($mysqli, "categorias", "id = $sec");

$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");

$depor = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '18'");
$tec = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '31'");
$nac = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '13'");
$inter = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '12'");

$contact = tomarRegistro($mysqli, "contacto", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");
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

					<div class="col-md-2 col-sm-0">

						<!-- sidebar -->
						<div class="sidebar small-sidebar">

							<div class="widget review-widget">
								<h1>Publicidad</h1>
								<ul class="review-posts-list">

									<? foreach ($publicidad as $pub) { ?>
										<li>

											<div class="banner_inner">
												<img href="<?= $pub["link"]; ?>" class="img-responsive" src="images/sitio/<?= $pub["imagen"]; ?>" alt="image">
											</div>



										</li>
									<? } ?>
								</ul>
							</div>



							<div class="widget categories-widget">
								<div class="title-section">
									<h1><span>Categorias</span></h1>
								</div>
								<ul class="category-list">

									<? foreach ($cates as $cate) { ?>
										<li>
											<a href="categorias.php?sec=<?= $cate["id"]; ?>"><?= $cate["nombre"]; ?></a>
										</li>
									<? } ?>

								</ul>
							</div>

						</div>

					</div>

					<div class="col-md-7 col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">
								<div class="title-section">
									<? if ($sec == "") { ?>
										<h1><span class="world">Noticias</span></h1>
									<? } else { ?>
										<h1><span class="world"><? echo $categoria["nombre"]; ?></span></h1>
									<? } ?>
								</div>
								<div class="row">
									<? foreach ($not as $nn) { ?>
										<div class="col-md-6">
											<div class="news-post image-post2">
												<div class="post-gallery">
													<div style="width: 100%; height: 200px; background-image: url(<?= $ruta; ?>images/noticias/<?= $nn['imagen']; ?>); background-size: cover; background-position:center;"></div>
													<div class="hover-box">
														<div class="inner-hover">
															<? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $nn["categoria"]); ?>

															<a class="category-post world" href="categorias.php?sec=<?= $nn["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
															<h2><a href="not.php?id=<?=$nn["id"];?>"><?= substr($nn['titulo'],0,120) ;?></a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?= $nn["fecha"]; ?></li>
																<li><a href="#"><i class="fa fa-eye"></i><span><?= $nn['visualizaciones']; ?></span></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="post-content">
													<p><?= substr($nn['encabezado'],0,120) ;?></p>
												</div>
											</div>
										</div>
									<? } ?>


								</div>
								
						

							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/600x80.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>
							

						</div>
				

					</div>

					<? include("parts/columder.php"); ?>

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
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/news-category3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:46:50 GMT -->

</html>