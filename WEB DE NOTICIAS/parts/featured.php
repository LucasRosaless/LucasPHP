<section class="features-today">
	<div class="container">

		<div class="title-section">
			<h1><span>Ultimas Subidas</span></h1>
		</div>

		<div class="features-today-box owl-wrapper">
			<div class="owl-carousel" data-num="4">

				<? foreach ($ulti as $ult) { ?>
					<div class="item news-post standard-post">
						<div class="post-gallery">
							<div style="width: 100% ; height: 180px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $ult['imagen']; ?>); background-size: cover; background-position: center;"></div>

							<?$categoria = tomarRegistro($mysqli, "categorias", "id = ".$ult["categoria"]);?>


							<a class="category-post world" href="categorias.php?sec=<?= $ult["categoria"]; ?>"><?=$categoria["nombre"];?></a>
						</div>
						<div class="post-content">
							<h2><a href="not.php?id=<?=$ult["id"];?>"><?= substr($ult['titulo'],0,120) ;?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?=$ult["fecha"];?></li>
								<!-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li> -->
								<li><a href="#"><i class="fa fa-comments-o"></i><span><?= $ult['visualizaciones']; ?></span></a></li>
							</ul>
						</div>
					</div>
				<? } ?>
				<!-- <div class="item news-post standard-post">
							<div class="post-gallery">
								<img src="upload/news-posts/st2.jpg" alt="">
								<a class="category-post sport" href="sport.html">Sport</a>
							</div>
							<div class="post-content">
								<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>27 may 2013</li>
									<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
							</div>
						</div>

						<div class="item news-post standard-post">
							<div class="post-gallery">
								<img src="upload/news-posts/st3.jpg" alt="">
								<a class="category-post food" href="food.html">Food &amp; Health</a>
							</div>
							<div class="post-content">
								<h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>27 may 2013</li>
									<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
							</div>
						</div>

						<div class="item news-post standard-post">
							<div class="post-gallery">
								<img src="upload/news-posts/st4.jpg" alt="">
								<a class="category-post sport" href="sport.html">Sport</a>
							</div>
							<div class="post-content">
								<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>27 may 2013</li>
									<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
							</div>
						</div>

						<div class="item news-post standard-post">
							<div class="post-gallery">
								<img src="upload/news-posts/st1.jpg" alt="">
								<a class="category-post travel" href="travel.html">Travel</a>
							</div>
							<div class="post-content">
								<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>27 may 2013</li>
									<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
							</div>
						</div> -->

			</div>
		</div>

	</div>
</section>