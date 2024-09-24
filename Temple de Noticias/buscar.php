<?
include_once("inc/conexion.php");

$referencia = $_GET['s'];

if ($referencia != "") {
    $not = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 25", "titulo  like '%" . $referencia . "%' OR encabezado  like '%" . $referencia . "%' OR descripcion  like '%" . $referencia . "%' OR fuente  like '%" . $referencia . "%'");
} else {
    $not = tomarRegistros($mysqli, "noticias", "id", "desc limit 12");
}

$categoria = tomarRegistro($mysqli, "categorias", "id = $sec");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");
$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 10");
$uult = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 11:32:46 GMT -->

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
            <div class="content-area">
                <div class="page-title">
                    <div class="main-top" style="background-image: url(images/bk2.jpg);">
                        <div class="overlay-top-header"></div>
                        <div class="content container">
                            <h1>
                                <? if ($referencia == "") { ?>
                                    Noticias
                                <? } else { ?>
                                    <? echo $referencia; ?>
                                <? } ?>
                            </h1>
                            <div class="wrap-breadcrumb">
                                <ul class="breadcrumbs">
                                    <li>
                                        <a href="javascript:;">
                                            Inicio
                                        </a>
                                    </li>
                                    <li>
                                        <span class="breadcrum-icon">/</span>
                                        Buscar
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-content sidebar-right layout-1">
                    <div class="container">
                        <div class="row">
                            <main class="site-main col-lg-9">
                                <div class="wrap-main-content">

                                    <div class="products-list">
                                        <div class="wrap-element">
                                            <!-- <div class="heading-products">
                                                <div class="results">
                                                    Showing all 8 results
                                                </div>
                                                <div class="sorting-select">
                                                    <label data-style="vblog-shop-page">
                                                        <select>
                                                            <option>Default sorting</option>
                                                            <option>Sorting by prices</option>
                                                            <option>Sorting by name</option>
                                                            <option>Popular</option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div> -->

                                            <div class="row">
                                                <? foreach ($not as $nnn) { ?>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="item-product">
                                                            <div class="media-item">
                                                                <div class="pic">
                                                                    <a href="not.php?id=<?= $nnn["id"]; ?>">
                                                                        <img style="width: 100% ; height: 280px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $nnn['imagen']; ?>); background-size: cover; background-position:center;"></img>
                                                                    </a>
                                                                </div>
                                                                <a href="not.php?id=<?= $nnn["id"]; ?>" class="btn-addcart">
                                                                    <i class="ion ion-eye"></i>
                                                                    VER MAS </a>
                                                            </div>
                                                            <div class="text-item" style="text-align: start;">
                                                                <h4 class="title">
                                                                    <a href="not.php?id=<?= $nnn["id"]; ?>">
                                                                        <?= htmlspecialchars(substr($nnn['titulo'], 0, 76)); ?></a>
                                                                </h4>
                                                                <span class="price">

                                                                    <span class="woocommerce-Price-amount">
                                                                        <?= htmlspecialchars(substr($nnn['encabezado'], 0, 70)); ?> ...
                                                                    </span>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </main>

                            <? include("parts/colum.php"); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <? include("parts/footer.php"); ?>

        <? include("parts/loader.php"); ?>

    </div>

    <script src="assets/js/libs/jquery/jquery.js"></script>

    <script src="assets/js/libs/bootstrap/popper.js"></script>
    <script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>

    <script src="assets/js/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/libs/slick/slick.min.js"></script>

    <script src="assets/js/libs/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/js/libs/select2/select2.min.js"></script>

    <script src="assets/js/libs/sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/thim-custom.js"></script>
    <div id="back-to-top" class="btn-back-to-top">
        <i class="ion ion-ios-arrow-thin-up"></i>
    </div>
</body>

</html>