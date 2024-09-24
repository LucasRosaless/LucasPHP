<section class="feature-video">
    <div class="container">
        <div class="title-section white">
            <h1><span>Noticias de Video</span></h1>
        </div>

        <div class="features-video-box owl-wrapper">
            <div class="owl-carousel" data-num="4">

                <? foreach ($videos as $vid) { ?>
                    <div class="item news-post video-post">
                        <div style="width: 100% ; height: 180px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $vid['imagen']; ?>); background-size: cover; background-position: center;"></div>
                        <a href="https://www.youtube.com/watch?v=<?= $vid["video"]; ?>" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                        <div class="hover-box">
                            <h2><a href="not.php?id=<?= $vid["id"]; ?>"><?= substr($vid['titulo'], 0, 120); ?></a></h2>

                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><?= $vid["fecha"]; ?></li>
                            </ul>
                        </div>
                    </div>
                <? } ?>


            </div>
        </div>
    </div>
</section>