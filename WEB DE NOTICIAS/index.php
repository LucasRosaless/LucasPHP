<?
include_once("inc/conexion.php");
include("parts/fecha.php");

$categorias = tomarRegistros($mysqli, "categorias", "id", "asc");

//-----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
$masvistas = tomarRegistros($mysqli, "noticias", "visualizaciones", "desc limit 10");
$videos = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 8", "tipo = '4'");
$princ = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "tipo = '3'");

$depor = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '18'");
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

		<!-- slide-news-section -->
		<? include("parts/slide.php"); ?>
		<!-- End slide-section -->


		<!-- features-today-section -->
		<? include("parts/featured.php"); ?>
		<!-- End features-today-section -->


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
							<div class="grid-box owl-wrapper">

								<div class="title-section">
									<h1><span>Noticias Principales</span></h1>
								</div>

								<div class="row">
									<? foreach ($princ as $pri) { ?>
										<div class="col-md-4">
											<div class="news-post video-post">
												<a href="not.php?id=<?= $pri["id"]; ?>">
													<div style="width: 100% ; height: 150px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $pri['imagen']; ?>); background-size: cover; background-position: center;"></div>
												</a>
												<div class="hover-box">
													<h2><a href="not.php?id=<?= $pri["id"]; ?>"><?= substr($pri['titulo'], 0, 120); ?></a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?= $pri['fecha']; ?></li>
													</ul>
												</div>
											</div>
										</div>
									<? } ?>

								</div>

							</div>

							

						</div>
						<!-- End grid box -->

						<!-- galery box -->
						<div class="galery-box">

							<div class="features-video-box owl-wrapper">
								<div class="owl-carousel" data-num="3">

									<? foreach ($publicidad as $pp) { ?>
										<div class="item news-post video-post" style="padding-left: 20px;">
											<div style="width: 100% ; height: 180px ; background-image: url(<?= $ruta; ?>images/sitio/<?= $pp['imagen']; ?>); background-size: cover; background-position:center;"></div>
										</div>
									<? } ?>


								</div>
							</div>
						</div>
						<!-- End galery box -->

						<!-- grid box -->
						<div class="grid-box">

							<div class="row">
								<div class="col-md-6">

									<div class="title-section">
										<h1><span>Internacionales</span></h1>
									</div>

									<ul class="list-posts">
										<? foreach ($inter as $int) { ?>

											<li>
												<div style="width: 100% ; height: 150px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $int['imagen']; ?>); background-size: cover; background-position: center;"></div>

												<div class="post-content">
													<h2><a href="not.php?id=<?= $int["id"]; ?>"><?= substr($int['titulo'], 0, 100); ?></a></h2>

													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?= $int['fecha']; ?></li>
													</ul>
												</div>
											</li>

										<? } ?>
										
									</ul>
								</div>

								<div class="col-md-6">

									<div class="title-section">
										<h1><span>Deporte</span></h1>
									</div>

									<ul class="list-posts">
										<? foreach ($depor as $dep) { ?>

											<li>
												<div style="width: 100% ; height: 150px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $dep['imagen']; ?>); background-size: cover; background-position: center;"></div>

												<div class="post-content">
													<h2><a href="not.php?id=<?= $dep["id"]; ?>"><?= substr($dep['titulo'], 0, 100); ?></a></h2>

													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?= $dep['fecha']; ?></li>
													</ul>
												</div>
											</li>

										<? } ?>

									
									</ul>
								</div>

							</div>

						</div>
						<!-- End grid box -->


						<!-- End google addsense -->



						<!-- article box -->
						<div class="article-box">
							<div class="title-section">
								<h1><span>Ultimas noticias</span></h1>
							</div>
							<? foreach ($ulti as $uu) { ?>
								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-4">
											<div class="post-gallery">
												<div style="width: 100% ; height: 170px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $uu['imagen']; ?>); background-size: cover; background-position: center;"></div>

											</div>
										</div>
										<div class="col-sm-8">
											<div class="post-content">
												<h2><a href="not.php?id=<?= $uu["id"]; ?>"><?= substr($uu["titulo"], 0, 150); ?></a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?= $uu["fecha"]; ?></li>
													<!-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li> -->
													<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
													<li><i class="fa fa-eye"></i><?= $uu["visualizaciones"]; ?></li>
												</ul>
												<!-- <span class="post-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</span> -->
												<p><?= substr($uu["encabezado"], 0, 200); ?></p>
											</div>
										</div>
									</div>
								</div>
							<? } ?>


						</div>


					</div>

					<?include("parts/columder.php");?>

				</div>

			</div>
		</section>



		<!-- feature-video-section  -->
		<? include("parts/videos.php"); ?>
		<!-- End feature-video-section -->

		<!-- features-today-section  -->
		<? include("parts/masvistos.php"); ?>
		<!-- End features-today-section  -->

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

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:45:37 GMT -->

</html>