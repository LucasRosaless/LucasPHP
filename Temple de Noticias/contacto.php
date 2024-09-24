<?
include_once("inc/conexion.php");

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

        <div id="main-content">
            <div class="content-area">
                <div class="page-title">
                    <div class="main-top" style="background-image: url(images/bk3.jpg);">
                        <div class="overlay-top-header"></div>
                        <div class="content container">
                            <h1>
                                Contacto </h1>
                            <div class="wrap-breadcrumb">
                                <ul class="breadcrumbs">
                                    <li>
                                        <a href="javascript:;">
                                            Inicio
                                        </a>
                                    </li>
                                    <li>
                                        <span class="breadcrum-icon">/</span>
                                        Contacto
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-content layout-1">
                    <main class="site-main">
                        <div class="wrap-main-content">

                            <div class="thim-contact-info_contact-page">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">

                                            <div class="bp-element bp-element-icon-box vblog-layout-2 align-center">
                                                <div class="icon-box">
                                                    <div class="icon-image">
                                                        <i class="ion ion-android-pin"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">
                                                            Direccion </h3>
                                                        <div class="description">
                                                            <?= $contacto["direccion_radio"]; ?> </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6 col-lg-3">

                                            <div class="bp-element bp-element-icon-box vblog-layout-2 align-center">
                                                <div class="icon-box">
                                                    <div class="icon-image">
                                                        <i class="ion ion-android-call"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">
                                                            Telefonos </h3>
                                                        <div class="description">
                                                            <a href="https://wa.me/<?= $contacto["whatsapp_radio"]; ?>"><?= $contacto["telefono_radio"]; ?></a>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6 col-lg-3">

                                            <div class="bp-element bp-element-icon-box vblog-layout-2 align-center">
                                                <div class="icon-box">
                                                    <div class="icon-image">
                                                        <i class="ion ion-email"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">
                                                            Correo
                                                        </h3>
                                                        <div class="description">
                                                            <a href="mailto:<?= $contacto["email_radio"]; ?>"><span class="__cf_email__" data-cfemail=""><?= $contacto["email_radio"]; ?></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6 col-lg-3">

                                            <div class="bp-element bp-element-icon-box vblog-layout-2 align-center">
                                                <div class="icon-box">
                                                    <div class="icon-image">
                                                        <i class="ion ion-thumbsup"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">
                                                            Siguenos </h3>
                                                        <div class="description">
                                                            <?php if (!empty($social["facebook"])) { ?>
                                                                <a href="<?= $social["facebook"]; ?>">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <?php if (!empty($social["twitter"])) { ?>
                                                                <a href="<?= $social["twitter"]; ?>">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <?php if (!empty($social["instagram"])) { ?>
                                                                <a href="<?= $social["instagram"]; ?>">
                                                                    <i class="fa fa-instagram"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <?php if (!empty($social["youtube"])) { ?>
                                                                <a href="<?= $social["youtube"]; ?>">
                                                                    <i class="fa fa-youtube-play"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <?php if (!empty($social["tumblr"])) { ?>
                                                                <a href="<?= $social["tumblr"]; ?>">
                                                                    <i class="fa fa-tumblr"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="divline_contact-page"></div>
                                </div>
                            </div>


                            <div class="thim-send-message_contact-page">
                                <div class="container">

                                    <div class="bp-element bp-element-heading align-center">
                                        <h3 class="title">
                                            Te contactamos </h3>
                                        <div class="description">
                                            Completa el formulario y nosotros nos contactamos. </div>
                                    </div>


                                    <form class="contact-form">
                                        <label class="wrap-input">
                                            <input type="text" name="name" placeholder="Name*">
                                        </label>
                                        <label class="wrap-input">
                                            <input type="text" name="email" placeholder="Email*">
                                        </label>
                                        <label class="wrap-input">
                                            <input type="text" name="phone" placeholder="Phone Number*">
                                        </label>
                                        <label class="wrap-input full-width">
                                            <input type="text" name="subject" placeholder="Subject*">
                                        </label>
                                        <label class="wap-textarea">
                                            <textarea name="msg" placeholder="Message*"></textarea>
                                        </label>
                                        <input type="submit" class="form-submit" value="send your message">
                                    </form>

                                </div>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106925.37831890657!2d-64.42476166689083!3d-33.12437956980177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d2000fbdd02247%3A0xc58d0a705d7cc0e3!2sR%C3%ADo%20Cuarto%2C%20C%C3%B3rdoba%20Province!5e0!3m2!1sen!2sar!4v1724433043925!5m2!1sen!2sar" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </main>
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