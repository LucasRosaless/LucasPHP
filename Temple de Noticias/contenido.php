<?
include_once("inc/conexion.php");
$id = $_GET['id'];
$text = tomarRegistro($mysqli, "textos", "id = '$id'");

$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");
$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 10");
$uult = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");
?>
<!DOCTYPE html>
<html lang="en">

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

<body class="responsive home-2 contact-page">
    <div id="wrapper-container">

        <? include("parts/header.php"); ?>
<br><br>
        <div class="site-content sidebar-right layout-1">
            <div class="container">
                <div class="row">
                    <main class="site-main col-lg-9">
                        <div class="wrap-main-content">

                            <div class="bl-blog-detail">
                                <div class="head-blog">
                                    <h2 class="title-blog-detail">
                                        <?= $text["titulo"]; ?>
                                    </h2>

                                </div>

                                <div class="text-blog-detail">

                                    <div class="content-blog">

                                        <p>
                                            <?= nl2br(htmlspecialchars($text["descripcion"])); ?>
                                        </p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>

                    <? include("parts/colum.php"); ?>

                </div>
            </div>
        </div>

        <? include("parts/footer.php"); ?>

        <? include("parts/loader.php"); ?>

    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

<!-- Mirrored from html.thimpress.com/vividly/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 11:33:07 GMT -->

</html>