<?
include_once("inc/conexion.php");
include("parts/fecha.php");
$referencia = $_GET['s'];
$not = tomarRegistrosCondicion($mysqli, "noticias","id","desc limit 25", "titulo  like '%".$referencia."%' OR encabezado  like '%".$referencia."%' OR descripcion  like '%".$referencia."%' OR fuente  like '%".$referencia."%'");

//----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
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

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">

				<!-- block content -->
				<div class="block-content non-sidebar">

					<!-- grid box -->
					<div class="grid-box">
						<div class="title-section">
							<h1><span class="world">TU BUSQUEDA: <?echo $referencia;?></span></h1>
						</div>

						<div class="row">
							<?foreach ($not as $buscc){?>
							<div class="col-md-4">
								<div class="news-post standard-post2">
									<div class="post-gallery">
									<div style="width: 100%; height: 227px; background-image: url(<?= $ruta; ?>images/noticias/<?= $buscc['imagen']; ?>); background-size: cover; background-position:center;"></div>
										<? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $buscc["categoria"]); ?>
										<a class="category-post world" href="categorias.php?sec=<?= $buscc["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
									</div>
									<div class="post-title">
										<h2><a href="not.php?id=<?= $buscc["id"]; ?>"><?= substr($buscc['titulo'], 0, 60); ?></a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?=$buscc["fecha"];?></li>
											
											<li><i class="fa fa-eye"></i><?=$buscc["visualizaciones"];?></li>
										</ul>
									</div>
									<div class="post-content">
										<p><?= substr($buscc['encabezado'], 0, 110);?></p>
										<a href="not.php?id=<?= $buscc["id"]; ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Leer Mas ></a>
									</div>
								</div>
							</div>
							<?}?>
							<!-- <div class="col-md-4">
								<div class="news-post standard-post2">
									<div class="post-gallery">
										<img src="upload/news-posts/im8.jpg" alt="">
										<a class="category-post world" href="world.html">Lifestyle</a>
									</div>
									<div class="post-title">
										<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
											<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
											<li><i class="fa fa-eye"></i>872</li>
										</ul>
									</div>
									<div class="post-content">
										<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
										<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news-post standard-post2">
									<div class="post-gallery">
										<img src="upload/news-posts/im19.jpg" alt="">
										<a class="category-post world" href="world.html">Politics</a>
									</div>
									<div class="post-title">
										<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
											<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
											<li><i class="fa fa-eye"></i>872</li>
										</ul>
									</div>
									<div class="post-content">
										<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
										<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
									</div>
								</div>
							</div> -->
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

					<!-- grid box -->
					
					<!-- End grid box -->

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
					<!-- End Pagination box -->

				</div>
				<!-- End block content -->
			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
		<?include("parts/footer.php");?>
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

<!-- Mirrored from nunforest.com/hotmagazine-demo/default/news-category5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 17:46:58 GMT -->
</html>