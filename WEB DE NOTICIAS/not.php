<?
include_once("inc/conexion.php");
include("parts/fecha.php") ;

$id = $_GET ['id'];
$noticia = tomarRegistro($mysqli, "noticias", "id = '$id'");

$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
$princ = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 6", "tipo = '3'");
$depor = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '18'");
$tec = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '31'");
$nac = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '13'");
$inter = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "categoria = '12'");

$link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$social = tomarRegistro($mysqli, "social", "id");
$contact = tomarRegistro($mysqli, "contacto", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc limit 6");
$cates = tomarRegistros($mysqli, "categorias", "id", "desc");

$visualizaciones = isset($noticia["visualizaciones"]) ? $noticia["visualizaciones"] + 1 : 1;

$sql = "UPDATE noticias SET visualizaciones='$visualizaciones' WHERE id='$id'";

if (!$resultado = $mysqli->query($sql)) {

    $mensaje_error = $mysqli->error;
} else {
    $mensaje_error = 'Se pudo actualizar el registro correctamente';
}
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

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1><?=$noticia["titulo"];?> </h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?=$noticia["fecha"];?></li>
										<li><i class="fa fa-user"></i>by <a href="#"><?= $contact["nombre_radio"]; ?></a></li>
										<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li> -->
										<li><i class="fa fa-eye"></i><?=$noticia["visualizaciones"];?></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$link;?>"><i class="fa fa-facebook"></i><span>Comparte en Facebook</span></a></li>
										<li><a class="twitter" href="https://twitter.com/intent/tweet?url=<?=$link;?>"><i class="fa fa-twitter"></i><span>Comparti en Twitter</span></a></li>
										<li><a class="linkedin" href="https://www.instagram.com/stories/new/?url=<?=$link;?>"><i class="fa fa-instagram"></i><span></span></a></li>
									</ul>
								</div>

								<!-- <div class="post-gallery">
									<ul class="bxslider">
										<li><img src="upload/news-posts/single3.jpg" alt=""></li>
										<li><img src="upload/news-posts/single2.jpg" alt=""></li>
										<li><img src="upload/news-posts/single1.jpg" alt=""></li>
									</ul>
									<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
								</div> -->

								<div class="post-gallery">
								<img src="images/noticias/<?=$noticia["imagen"];?>" alt="">
								</div>
								<div class="post-content">

									<blockquote>
										<p><?= nl2br(htmlspecialchars($noticia["encabezado"])); ?></p>
									</blockquote>

									<p><?= nl2br(htmlspecialchars($noticia["descripcion"])); ?></p>

									<br><br><br><br>

									<?include("parts/featured.php");?>

								</div> <br><br><br>

								<!-- <div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Politics</a></li>
										<li><a href="#">Sport</a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="prev-next-posts">
									<div class="prev-post">
										<img src="upload/news-posts/listw4.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="prev post">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
											</ul>
										</div>
									</div>
									<div class="next-post">
										<img src="upload/news-posts/listw5.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="next post">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
											</ul>
										</div>
									</div>
								</div> -->

								<!-- <div class="about-more-autor">
									<ul class="nav nav-tabs" id="myTab2">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										<li>
											<a href="#more-autor" data-toggle="tab">More From Autor</a>
										</li>
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<img src="upload/users/avatar1.jpg" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><span>Jane Smith</span><a href="autor-details.html">18 Posts</a></h1>
														<ul class="autor-social">
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
															<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
													<p>
														Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. 
													</p>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal1.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal2.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal3.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal4.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div> -->

								<!-- carousel box -->
								<!-- End carousel box -->

								<!-- comment area box -->
								
								<!-- End comment area box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Envianos Un Cometario</span> <span class="email-not-published"></span></h1>
									</div>
									<form id="comment-form">
										<div class="row">
											<div class="col-md-4">
												<label for="name">Nombre*</label>
												<input id="name" name="name" type="text">
											</div>
											<div class="col-md-4">
												<label for="mail">E-mail*</label>
												<input id="mail" name="mail" type="text">
											</div>
											<!-- <div class="col-md-4">
												<label for="website">Website</label>
												<input id="website" name="website" type="text">
											</div> -->
										</div>
										<label for="comment">Comentario*</label>
										<textarea id="comment" name="comment"></textarea>
										<button type="submit" id="submit-contact">
											<i class="fa fa-comment"></i> Envia Comentario
										</button>
									</form>
								</div>
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>

					<?include("parts/columder.php");?>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer -->
		<?include("parts/footer.php")?>
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

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/single-post2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:47:03 GMT -->
</html>