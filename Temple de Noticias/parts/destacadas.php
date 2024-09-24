<div class="thim-trending-categories_home-2">
    <div class="container">

        <div class="bp-element bp-element-st-list-categories vblog-layout-slider-2">
            <div class="wrap-element">
                <div class="heading-post">
                    <div class="text">
                        <h3 class="title">
                            Noticias Destacadas </h3>
                        <div class="description">
                            Encuentra el contenido destacado </div>
                    </div>
                </div>
                <div class="list-posts">
                    <div class="slide-posts js-call-slick-col" data-numofshow="3" data-numofscroll="1" data-loopslide="0" data-autoscroll="0" data-speedauto="6000" data-responsive="[3, 1], [3, 1], [2, 1], [2, 1], [1, 1]">
                        <!-- <div class="wrap-arrow-slick">
                                        <div class="arow-slick prev-slick">
                                            <i class="ion ion-ios-arrow-left"></i>
                                        </div>
                                        <div class="arow-slick next-slick">
                                            <i class="ion ion-ios-arrow-right"></i>
                                        </div>
                                    </div> -->

                        <div class="slide-slick">

                            <?
                            $cont = 0;
                            foreach ($dest as $dd) {
                                if ($cont == 0 || $cont == 3) { ?>
                                    <div class="item-slick">
                                        <a href="not.php?id=<?= $dd["id"]; ?>" class="post-item">

                                            <img style="width: 100% ; height: 700px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $dd['imagen']; ?>); background-size: cover; background-position:center;"></img>

                                            <div class="content">
                                                <span class="title"> <?= htmlspecialchars(substr($dd['titulo'], 0, 60)); ?>
                                                </span> <?= htmlspecialchars(substr($dd['titulo'], 0, 90)); ?>
                                            </div>
                                        </a>
                                    </div>
                                    <?
                                }

                                if ($cont > 0) {
                                    if ($cont == 1) { ?>
                                        <div class="item-slick">
                                        <?
                                    } ?>
                                        <a href="not.php?id=<?= $dd["id"]; ?>" class="post-item">
                                            <img style="width: 100% ; height: 350px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $dd['imagen']; ?>); background-size: cover; background-position:center;"></img>
                                            <div class="content">
                                                <span class="title"> <?= htmlspecialchars(substr($dd['titulo'], 0, 60)); ?>
                                                </span> <?= htmlspecialchars(substr($dd['titulo'], 0, 90)); ?>

                                            </div>
                                        </a>
                                        <?
                                        if ($cont == 2) { ?>
                                        </div>
                            <?
                                        }
                                    }
                                    $cont++;
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>