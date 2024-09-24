<?
include_once("inc/conexion.php");
include("parts/fecha.php");

$categorias = tomarRegistros($mysqli, "categorias", "id", "asc");

//-----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
$masvistas = tomarRegistros($mysqli, "noticias", "visualizaciones", "desc limit 10");
$videos = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 8", "tipo = '4'");
$slide = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 8", "tipo = '1'");
$princ = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "tipo = '3'");

$depor = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 7", "categoria = '18'");
$tec = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '31'");
$nac = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '13'");
$inter = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "categoria = '12'");
$prov = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "categoria = '30'");
$even = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "categoria = '17'");
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
		<? include("parts/header2.php"); ?>
		<!-- End Header -->

		<!-- big-slider-section
			================================================== -->
		<section class="big-slider">
			<div class="container">
				<div class="image-slider">
					<ul class="big-bxslider">
						<? foreach ($slide as $sl) { ?>
							<li>
								<div class="news-post image-post2">
									<div class="post-gallery">
										<div style="width: 100%; height: 500px; background-image: url(<?= $ruta; ?>images/noticias/<?= $sl['imagen']; ?>); background-size: cover; background-position:center;"></div>

										<div class="hover-box">
											<div class="inner-hover">
												<? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $sl["categoria"]); ?>

												<a class="category-post food" href="categorias.php?sec=<?= $sl["categoria"]; ?>">><?= $categoria["nombre"]; ?></a>
												<h2><a href="not.php?id=<?= $sl["id"]; ?>"><?= substr($sl['titulo'], 0, 100); ?></a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?= $sl["fecha"]; ?></li>
													<!-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
													<li><i class="fa fa-eye"></i><?= $sl["visualizaciones"]; ?></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						<? } ?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End big-slider-section -->



		<!-- features-today-section
			================================================== -->
		<? include("parts/featured.php"); ?>
		<!-- End features-today-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">


								<div class="owl-carousel" data-num="2">
									<div class="col-md-12">
										<div class="title-section">
											<h1><span class="fashion">Internacional</span></h1>
										</div>
										<?
										$numi = 0;
										foreach ($inter as $ii) { ?>
											<div class="item">
												<? if ($numi == 0) { ?>
													<div class="news-post image-post2">
														<div class="post-gallery">
															<div style="width: 100%; height: 280px; background-image: url(<?= $ruta; ?>images/noticias/<?= $ii['imagen']; ?>); background-size: cover; background-position:center;"></div>

															<!-- <img src="upload/news-posts/im1.jpg" alt=""> -->
															<div class="hover-box">
																<div class="inner-hover">
																	<h2><a href="not.php?id=<?= $ii["id"]; ?>"><?= substr($ii['titulo'], 0, 100); ?></a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i><?= $ii["fecha"]; ?></li>
																		<!-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
																		<li><i class="fa fa-eye"></i><?= $ii["visualizaciones"]; ?></li>
																	</ul>
																</div>
															</div>
														</div>
													</div><br>
												<? } else { ?>
													<ul class="list-posts">
														<li>
															<img style="width: 30%; height: 90px; background-image: url(<?= $ruta; ?>images/noticias/<?= $ii['imagen']; ?>); background-size: cover; background-position:center;"></img>
															<div class="post-content">
																<h2><a href="not.php?id=<?= $ii["id"]; ?>"><?= substr($ii['titulo'], 0, 100); ?> </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?= $ii["fecha"]; ?></li>
																</ul>
															</div>
														</li>
													<? } ?>
													</ul>
													<? $numi++; ?>
											</div>
										<? } ?>
									</div>
									<div class="col-md-12">
										<div class="title-section">
											<h1><span class="world">Deporte</span></h1>
										</div>
										<?
										$numd = 0;
										foreach ($depor as $de) { ?>
											<div class="item">
												<? if ($numd == 0) { ?>
													<div class="news-post image-post2">
														<div class="post-gallery">
															<div style="width: 100%; height: 280px; background-image: url(<?= $ruta; ?>images/noticias/<?= $de['imagen']; ?>); background-size: cover; background-position:center;"></div>
															<div class="hover-box">
																<div class="inner-hover">
																	<h2><a href="not.php?id=<?= $de["id"]; ?>"><?= substr($de['titulo'], 0, 100); ?></a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i><?= $de["fecha"]; ?></li>
																		<!-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
																		<li><i class="fa fa-eye"></i><?= $de["visualizaciones"]; ?></li>
																	</ul>
																</div>
															</div>
														</div>
													</div><br>
												<? } else { ?>
													<ul class="list-posts">

														<li>
															<img style="width: 30%; height: 90px; background-image: url(<?= $ruta; ?>images/noticias/<?= $de['imagen']; ?>); background-size: cover; background-position:center;"></img>
															<div class="post-content">
																<h2><a href="not.php?id=<?= $de["id"]; ?>"><?= substr($de['titulo'], 0, 100); ?> </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?= $de["fecha"]; ?></li>
																</ul>
															</div>
														</li>
													<? } ?>
													</ul>
													<? $numd++; ?>
											</div>
										<? } ?>
									</div>



								</div>

							</div><br><br>
							<!-- End carousel box -->

							<!-- carousel box -->
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
							<!-- End carousel box -->

							<!-- grid box -->


							<div class="sidebar">
								<div class="widget tab-posts-widget">

									<ul class="nav nav-tabs" id="myTab">
										<li class="active">
											<a href="#option1" data-toggle="tab">Provinciales</a>
										</li>
										<li>
											<a href="#option2" data-toggle="tab">Eventos</a>
										</li>
										<li>
											<a href="#option3" data-toggle="tab">Deporte</a>
										</li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="option1">
											<ul class="list-posts">
												<? foreach ($prov as $pro) { ?>
													<li>
														<img style="width: 35% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $pro['imagen']; ?>); background-size: cover; background-position: center;"></img>
														<div class="post-content">
															<h2><a href="not.php?id=<?= $pro["id"]; ?>"><?= substr($pro["titulo"], 0, 205) ?> </a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?= $pro['fecha']; ?></li>
															</ul>
														</div>
													</li>
												<? } ?>

											</ul>
										</div>
										<div class="tab-pane" id="option2">
											<ul class="list-posts">
												<? foreach ($even as $ee) { ?>

													<li>
														<img style="width: 35% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $ee['imagen']; ?>); background-size: cover; background-position: center;"></img>
														<div class="post-content">
															<h2><a href="not.php?id=<?= $ee["id"]; ?>"><?= substr($ee["titulo"], 0, 205) ?> </a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?= $ee['fecha']; ?></li>
															</ul>
														</div>
													</li>
												<? } ?>



											</ul>
										</div>
										<div class="tab-pane" id="option3">
											<ul class="list-posts">
												<? foreach ($depor as $dd) { ?>

													<li>
														<img style="width: 35% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $dd['imagen']; ?>); background-size: cover; background-position: center;"></img>
														<div class="post-content">
															<h2><a href="not.php?id=<?= $dd["id"]; ?>"><?= substr($dd["titulo"], 0, 205) ?> </a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?= $dd['fecha']; ?></li>
															</ul>
														</div>
													</li>
												<? } ?>


											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
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
							<!-- End google addsense -->

						</div>
						<!-- End block content -->

					</div>

					<? include("parts/columder.php"); ?>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- feature-video-section  -->
		<? include("parts/videos.php"); ?>
		<!-- End feature-video-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- masonry box -->
							<div class="masonry-box">

								<div class="title-section">
									<h1><span>Ultimas Noticiass</span></h1>
								</div>

								<div class="latest-articles iso-call">

									<? foreach ($ulti as $uuuu) { ?>
										<div class="news-post standard-post2 default-size">
											<div class="post-gallery">
											<img style="width: 100% ; height: 180px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $uuuu['imagen']; ?>); background-size: cover; background-position: center;"></img>
											</div>
											<div class="post-title">
												<h2><a href="not.php?id=<?= $uuuu["id"]; ?>"><?= substr($uuuu["titulo"], 0, 150) ?>  </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?= $uuuu['fecha']; ?></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span><?= $uuuu['visualizaciones']; ?></span></a></li>
												</ul>
											</div>
										</div>
									<? } ?>

								</div>

							</div>
							<!-- End masonry box -->

							<!-- pagination box -->
							<!-- <div class="pagination-box">
								<ul class="pagination-list">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">9</a></li>
									<li><a href="#">Next</a></li>
								</ul>
								<p>Page 1 of 9</p>
							</div> -->
							<!-- End pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">


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

							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/200x200.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>

						</div>
						<!-- End sidebar -->

					</div>

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

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/header5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:46:58 GMT -->

</html>