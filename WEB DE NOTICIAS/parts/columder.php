<div class="col-md-3 col-sm-4">

	<!-- sidebar -->
	<div class="sidebar large-sidebar">

		<div class="widget search-widget">


			<form class="search-form" action="buscar.php" method="get" role="search">
				<input type="text" id="s" name="s" placeholder="Buscar Aqui">
				<button type="submit" id="s"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<div class="widget social-widget">
			<div class="title-section">
				<h1><span>Nuestras Redes</span></h1>
			</div>
			<ul class="social-share">
				<? if ($social["instagram"] != "") { ?>
					<li>
						<a href="<?= $social["instagram"]; ?>" class="rss" style="background-color: purple;"><i class="fa fa-instagram"></i></a>
						<span class="number">instagram</span>
						<a href="<?= $social["instagram"]; ?>"><span>Seguir</span></a>
					</li>
				<? } ?>
				<? if ($social["facebook"] != "") { ?>
					<li>
						<a href="<?= $social["facebook"]; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
						<span class="number">facebook</span>
						<a href="<?= $social["facebook"]; ?>"><span>Seguir</span></a>
					</li>
				<? } ?>
				<? if ($social["twitter"] != "") { ?>
					<li>
						<a href="<?= $social["twitter"]; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
						<span class="number">Twitter</span>
						<a href="<?= $social["twitter"]; ?>"><span>Seguir</span></a>
					</li>
				<? } ?>
				<? if ($social["pinterest"] != "") { ?>
					<li>
						<a href="<?= $social["pinterest"]; ?>" class="google"><i class="fa fa-pinterest"></i></a>
						<span class="number">Pinterest</span>
						<a href="<?= $social["pinterest"]; ?>"><span>Seguir</span></a>
					</li>
				<? } ?>
			</ul>
		</div>


		<div class="widget tab-posts-widget">

			<ul class="nav nav-tabs" id="myTab">
				<li class="active">
					<a href="#option1" data-toggle="tab">Tecnologia</a>
				</li>
				<li>
					<a href="#option2" data-toggle="tab">Nacional</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="option1">
					<ul class="list-posts">
						<? foreach ($tec as $tt) { ?>

							<li>
								<img style="width: 35% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $tt['imagen']; ?>); background-size: cover; background-position: center;"></img>
								<div class="post-content">
									<h2><a href="not.php?id=<?= $tt["id"]; ?>"><?= substr($tt["titulo"], 0, 150) ?> </a></h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?= $tt['fecha']; ?></li>
									</ul>
								</div>
							</li>
						<? } ?>
					</ul>
				</div>
				<div class="tab-pane" id="option2">
					<ul class="list-posts">

						<? foreach ($nac as $tn) { ?>

							<li>
								<img style="width: 35% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $tn['imagen']; ?>); background-size: cover; background-position: center;"></img>
								<div class="post-content">
									<h2><a href="not.php?id=<?= $tn["id"]; ?>"><?= substr($tn["titulo"], 0, 150) ?> </a></h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?= $tn['fecha']; ?></li>
									</ul>
								</div>
							</li>
						<? } ?>


					</ul>
				</div>
			</div>
		</div>

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



	</div>
	<!-- End sidebar -->

</div>