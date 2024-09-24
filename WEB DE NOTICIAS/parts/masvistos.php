<section class="features-today">
	<div class="container">

		<div class="title-section">
			<h1><span>Mas Vistos</span></h1>
		</div>

		<div class="features-today-box owl-wrapper">
			<div class="owl-carousel" data-num="4">

				<? foreach ($masvistas as $mas) { ?>

					<div class="item news-post standard-post">
						<div class="post-gallery">
						<div style="width: 100% ; height: 160px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $mas['imagen']; ?>); background-size: cover; background-position: center;"></div>

							<? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $mas["categoria"]); ?>

							<a class="category-post world" href="categorias.php?sec=<?= $mas["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
						</div>
						<div class="post-content">
							<h2><a href="not.php?id=<?=$mas["id"];?>"><?= substr($mas['titulo'],0,120) ;?></a></h2>

							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?= $mas["fecha"]; ?></li>
								<!-- <li><i class="fa fa-user"></i>by <a href="#">Jkohn Doe</a></li> -->
								<li><a href="#"><i class="fa fa-eye"></i><span><?= $mas['visualizaciones']; ?></span></a></li>
							</ul>
						</div>
					</div>

				<? } ?>



			</div>
		</div>

	</div>
</section>