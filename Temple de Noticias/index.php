<?
include_once("inc/conexion.php");

$nottis = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc"," tipo = '2'");
$dest = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "tipo ='3'");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");

$destacado = tomarRegistro($mysqli, "categorias", "destacar = '1'");
$big = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 5", "categoria= '" . $destacado["id"] . "'");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 11:32:09 GMT -->

<head>
    <title><?= $contacto["nombre_radio"]; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<? include("parts/favicon.php"); ?>" />

    <link rel="stylesheet" type="text/css" href="assets/css/libs/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/ionicons-2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/libs/slick/slick.css">

    <link rel="stylesheet" type="text/css" href="assets/css/libs/magnific-popup/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <style>
        .bp-element-st-list-videos.vblog-layout-slider-1 .post-item .info {
            text-transform: none;
        }
    </style>
</head>

<body class="responsive home-2">
    <div id="wrapper-container">

        <? include("parts/header.php"); ?>

        <div id="main-content">

            <? include("parts/slide.php"); ?>


            <div class="thim-popular-video_home-2">
                <div class="container">

                    <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">
                        <div class="wrap-element">
                            <div class="heading-post">
                                <h3 class="title">
                                    Noticias </h3>
                                <div class="description">

                                </div>
                            </div>

                            <div class="list-posts">
                                <div class="slide-posts js-call-slick-col" data-numofshow="4" data-numofscroll="1" data-loopslide="1" data-autoscroll="0" data-speedauto="6000" data-responsive="[4, 1], [4, 1], [3, 1], [2, 1], [1, 1]">
                                    <div class="wrap-arrow-slick">
                                        <div class="arow-slick prev-slick">
                                            <i class="ion ion-ios-arrow-left"></i>
                                        </div>
                                        <div class="arow-slick next-slick">
                                            <i class="ion ion-ios-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="slide-slick">
                                        <? foreach ($nottis as $nn) { ?>
                                            <div class="item-slick">
                                                <div class="post-item">
                                                    <div class="pic">
                                                        <div style="width: 100% ; height: 240px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $nn['imagen']; ?>); background-size: cover; background-position:center;" alt="IMG"></div>
                                                        <div class="overlay"></div>
                                                        <div class="meta-info">

                                                            <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $nn["categoria"]); ?>

                                                            <a href="categorias.php?sec=<?= $nn["categoria"]; ?>">
                                                                <div class="label">
                                                                    <?= $categoria["nombre"]; ?>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <h4 class="title" style="text-align: start;">
                                                        <a href="not.php?id=<?= $nn["id"]; ?>">
                                                            <?= htmlspecialchars(substr($nn['titulo'], 0, 90)); ?>
                                                        </a>
                                                    </h4>
                                                    <div class="info" style="text-align: start;">
                                                        <a href="not.php?id=<?= $nn["id"]; ?>" style="color: #4f4f4f;">
                                                            <?= htmlspecialchars(substr($nn['encabezado'], 0, 120)); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <? include("parts/destacadas.php"); ?>

            <div class="thim-tvshow_home-2" style="background-image: url(images/bkBig.jpg);">
                <div class="overlay-area"></div>
                <div class="container">

                    <div class="bp-element bp-element-st-list-videos vblog-layout-1">
                        <div class="wrap-element">
                            <div class="heading-post">
                                <h3 class="title">
                                    <?= $destacado["nombre"] ?> </h3>
                            </div>

                            <? $cont = 0;
                            foreach ($big as $bb) { ?>
                                <? if ($cont == 0) { ?>
                                    <div class="feature-item">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="video">
                                                    <a href="not.php?id=<?= $bb["id"]; ?>">
                                                        <img style="width: 100% ; height: 460px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $bb['imagen']; ?>); background-size: cover; background-position:center;"></img>
                                                    </a>
                                                    <div class="overlay"></div>
                                                    <div class="meta-info">
                                                        <!-- <div class="imdb">
                                                            <span class="value">5</span>IMDb
                                                        </div> -->
                                                        <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $bb["categoria"]); ?>
                                                        <a href="categorias.php?sec=<?= $bb["categoria"]; ?>">
                                                            <div class="label">
                                                                <?= $categoria["nombre"]; ?>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="text">
                                                    <h4 class="title">
                                                        <a href="not.php?id=<?= $bb["id"]; ?>">
                                                            <?= htmlspecialchars(substr($bb['titulo'], 0, 90)); ?>
                                                        </a>
                                                    </h4>
                                                    <div class="info">
                                                        <span class="item-info"><?= $bb['fecha']; ?></span>
                                                        <span class="item-info"><?= $bb['fuente']; ?></span>
                                                    </div>
                                                    <div class="description">
                                                        <?= htmlspecialchars(substr($bb['encabezado'], 0, 120)); ?> </div>
                                                    <a href="not.php?id=<?= $bb["id"]; ?>" class="btn-readmore btn-normal shape-round">
                                                        Ver mas </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>


                    <div class="bp-element bp-element-st-list-videos vblog-layout-1-1">
                        <div class="wrap-element">
                            <div class="normal-items">
                                <div class="row">
                                <? } else { ?>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="item">
                                            <div class="pic">
                                                <a href="not.php?id=<?= $bb["id"]; ?>">
                                                    <img style="width: 100% ; height: 170px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $bb['imagen']; ?>); background-size: cover; background-position:center;"></img>
                                                </a>
                                                <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $bb["categoria"]); ?>
                                                <a href="categorias.php?sec=<?= $bb["categoria"]; ?>">
                                                    <div class="label">
                                                        <?= $categoria["nombre"]; ?>
                                                    </div>
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="not.php?id=<?= $bb["id"]; ?>">
                                                    <?= htmlspecialchars(substr($bb['titulo'], 0, 70)); ?>
                                                </a>
                                            </h4>
                                            <div class="info">
                                                <?= htmlspecialchars(substr($bb['encabezado'], 0, 70)); ?>
                                            </div>
                                        </div>
                                    </div>
                            <? }
                                $cont++;
                            } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <? include("parts/categorias_All.php"); ?>


        </div>

        <?php include("parts/footer.php"); ?>

        <?php include("parts/loader.php"); ?>

    </div>

    <script src="assets/js/libs/jquery/jquery.js"></script>

    <script src="assets/js/libs/bootstrap/popper.js"></script>
    <script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>

    <script src="assets/js/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/libs/slick/slick.min.js"></script>

    <script src="assets/js/libs/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/js/libs/select2/select2.min.js"></script>

    <script src="assets/js/thim-custom.js"></script>
    <div id="back-to-top" class="btn-back-to-top">
        <i class="ion ion-ios-arrow-thin-up"></i>
    </div>
</body>

<!-- Mirrored from html.thimpress.com/vividly/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 11:32:15 GMT -->

</html>