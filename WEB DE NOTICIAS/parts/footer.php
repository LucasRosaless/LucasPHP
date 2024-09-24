<?
include_once("inc/conexion.php");

//-----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 3");
//-----------------

$pie = tomarRegistro($mysqli,"textos","id='4'");
$social = tomarRegistro($mysqli, "social", "id");
$contact = tomarRegistro($mysqli, "contacto", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc limit 6");
$cates = tomarRegistros($mysqli, "categorias", "id", "desc");


?>
<footer>
	<div class="container">
		<div class="footer-widgets-part">
			<div class="row">
				<div class="col-md-3">
					<div class="widget flickr-widget">
						<h1><?= $contact["nombre_radio"]; ?></h1>
						<ul class="flickr-list">
							<li><a href="index.php"><img  style="max-width: 210px;" src="<?include("parts/logo.php");?>" alt=""></a></li>

						</ul>

					</div>
				</div>
				<div class="col-md-3">
					<div class="widget text-widget">
						<h1>NOSOTROS</h1>
						<p><?=$pie["descripcion"];?> </p>
					</div>
					<div class="widget social-widget">
						<h1>Nuestras Redes</h1>
						<ul class="social-icons">
                            <?if($social["facebook"] != ""){?>
                            <li><a class="facebook" href="<?=$social["facebook"];?>"><i class="fa fa-facebook"></i></a></li>
                            <?}?>

                            <?if($social["twitter"] != ""){?>
                            <li><a class="twitter" href="<?=$social["twitter"];?>"><i class="fa fa-twitter"></i></a></li>
                            <?}?>

                            <?if($social["instagram"] != ""){?>
                            <li><a class="pinterest" href="<?=$social["instagram"];?>"><i class="fa fa-instagram"></i></a></li>
                            <?}?>

                            <?if($social["google"] != ""){?>
                            <li><a class="google" href="<?=$social["google"];?>"><i class="fa fa-google-plus"></i></a></li>
                            <?}?>

                            <?if($social["linkedin"] != ""){?>
                            <li><a class="linkedin" href="<?=$social["linkedin"];?>"><i class="fa fa-linkedin"></i></a></li>
                            <?}?>

                            <?if($social["pinterest"] != ""){?>
                            <li><a class="pinterest" href="<?=$social["pinterest"];?>"><i class="fa fa-pinterest"></i></a></li>
                            <?}?>

                        </ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget posts-widget">
						<h1>Ultimas Noticias</h1>
						<ul class="list-posts">
							<? foreach ($ulti as $ii) { ?>
								<li>
									<img style="width: 30% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $ii['imagen']; ?>); background-size: cover; background-position: center;">
									<div class="post-content">

										<h2><a href="not.php?id=<?= $ii["id"]; ?>"><?= substr($ii['titulo'], 0, 120); ?></a></h2>

										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?= $ii['fecha']; ?></li>
										</ul>
									</div>
								</li>
							<? } ?>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget categories-widget">
						<h1>Categorias</h1>
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
		</div>
		<div class="footer-last-line">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; COPYRIGHT <?=date("Y");?> Go Streaming</p>
				</div>
				<div class="col-md-6">
					<nav class="footer-nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="categorias.php">Categorias</a></li>
							<li><a href="contenido.php?id=9">Historia</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>