<?
include_once("inc/conexion.php");

$id = $_GET['id'];
$noticia = tomarRegistro($mysqli, "noticias", "id = '$id'");
$categoria = tomarRegistro($mysqli, "categorias", "id = $sec");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");
$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 10");
$uult = tomarRegistros($mysqli, "noticias", "id", "desc limit 6");

$link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$sql = "UPDATE noticias SET visualizaciones='$visualizaciones' WHERE id='$id'";

if (!$resultado = $mysqli->query($sql)) {
    $mensaje_error = $mysqli->error;
} else {
    $mensaje_error = 'Se pudo actualizar el registro correctamente';
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                    <div class="main-top" style="background-image: url(images/bk4.jpg);">
                        <div class="overlay-top-header"></div>
                        <div class="content container">
                            <h1>
                                Noticia </h1>
                            <div class="wrap-breadcrumb">
                                <ul class="breadcrumbs">
                                    <li>
                                        <a href="javascript:;">
                                            inicio
                                        </a>
                                    </li>
                                    <li>
                                        <span class="breadcrum-icon">/</span>
                                        Noticia Individual
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

                                    <div class="bl-blog-detail">
                                        <div class="head-blog">
                                            <h2 class="title-blog-detail">
                                                <?= $noticia["titulo"]; ?> </h2>
                                            <div class="info-blog-detail">
                                                <span class="info-item">
                                                    <i class="ion ion-android-person"></i>
                                                    By <a href="javascript:;">

                                                        <? if (!empty($noticia["fuente"])) {
                                                            echo $noticia["fuente"];
                                                        } else {
                                                            echo $contacto["nombre_radio"];
                                                        }
                                                        ?>

                                                    </a>
                                                </span>
                                                <span class="info-item">
                                                    <i class="ion ion-calendar"></i>
                                                    <a href="javascript:;"><?= $noticia["fecha"]; ?></a>
                                                </span>
                                                <span class="info-item">
                                                    <i class="ion ion-eye"></i>
                                                    <?= $noticia["visualizaciones"]; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-blog-detail">
                                            <div class="pic">
                                                <? if ($noticia['video'] != '') { ?>
                                                    <iframe width="800" height="560" src="https://www.youtube.com/embed/<?php echo $noticia["video"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                <? } else { ?>
                                                    <img src="images/noticias/" alt="event image">
                                                <? } ?>
                                            </div>
                                            <!-- <div class="date">
                                                 <span class="number">08</span> AUG, 2018
                                            </div> -->
                                        </div>
                                        <div class="text-blog-detail">
                                            <div class="wrap-share-blog sticky-sidebar">
                                                <div class="share">
                                                    <span class="namefield">
                                                        Share
                                                    </span>
                                                    <span class="socials">
                                                        <!-- <a href="javascript:;" class="item-social">
                                                            <i class="ion ion-social-facebook"></i>
                                                        </a>
                                                        <a href="javascript:;" class="item-social">
                                                            <i class="ion ion-social-twitter"></i>
                                                        </a>
                                                        <a href="javascript:;" class="item-social">
                                                            <i class="ion ion-social-googleplus"></i>
                                                        </a>
                                                        <a href="javascript:;" class="item-social">
                                                            <i class="ion ion-social-vimeo"></i>
                                                        </a> -->

                                                        <a class="item-social" href="https://www.facebook.com/sharer/sharer.php?u=<?= $link; ?>" target="_blank">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>

                                                        <a class="item-social" href="https://api.whatsapp.com/send?text=<?= $link; ?>" target="_blank">
                                                            <i class="fa-brands fa-whatsapp"></i>
                                                        </a>

                                                        <a class="item-social" href="https://twitter.com/intent/tweet?url=<?= $link; ?>" target="_blank">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>

                                                        <a class="item-social" href="https://www.instagram.com/?url=<?= $link; ?>" target="_blank">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>

                                                        <a class="item-social" href="mailto:?subject=Interesante Noticia&body=Te comparto esta noticia: <?= $link; ?>" target="_blank">
                                                            <i class="fa-solid fa-envelope"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="content-blog">
                                                <blockquote>
                                                    <?= nl2br(htmlspecialchars($noticia["encabezado"])); ?>
                                                </blockquote>
                                                <p>
                                                    <?= nl2br(htmlspecialchars($noticia["descripcion"])); ?>
                                                </p>

                                                <!-- <div class="tags">
                                                    <span class="name-field">Tags:</span>
                                                    <a href="javascript:;" class="tag-item">film maker,</a>
                                                    <a href="javascript:;" class="tag-item">film studio</a>
                                                </div> -->

                                                <!-- <div class="author-blog">
                                                    <div class="pic-author">
                                                        <div class="ava-author">
                                                            <a href="javascript:;"><img src="assets/images/ava-01.jpg" alt="IMG"></a>
                                                        </div>
                                                        <div class="socials-author">
                                                            <a href="javascript:;" class="item-social">
                                                                <i class="ion ion-social-facebook"></i>
                                                            </a>
                                                            <a href="javascript:;" class="item-social">
                                                                <i class="ion ion-social-twitter"></i>
                                                            </a>
                                                            <a href="javascript:;" class="item-social">
                                                                <i class="ion ion-social-googleplus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="text-author">
                                                        <div class="name-author">
                                                            <a href="javascript:;">
                                                                Michael Mikado
                                                            </a>
                                                        </div>
                                                        <div class="info-aothor">
                                                            Front-end dev
                                                        </div>
                                                        <div class="content-author">
                                                            If you are a newbie to managing a WordPress website, then tions! You are here at the right track with us be we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="navigate-blog">
                                                    <div class="navi-item prev-blog">
                                                        <a href="javascript:;" class="navi-arrow">
                                                            <i class="ion ion-ios-arrow-thin-left"></i>
                                                        </a>
                                                        <div class="navi-text">
                                                            <div class="name-navi">
                                                                PREVIOUS
                                                            </div>
                                                            <div class="title-navi">
                                                                <a href="javascript:;">
                                                                    Exploring the New York
                                                                </a>
                                                            </div>
                                                            <div class="info-navi">
                                                                October 15, 2018
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="navi-item next-blog">
                                                        <div class="navi-text">
                                                            <div class="name-navi">
                                                                Next
                                                            </div>
                                                            <div class="title-navi">
                                                                <a href="javascript:;">
                                                                    Exploring the New York
                                                                </a>
                                                            </div>
                                                            <div class="info-navi">
                                                                October 15, 2018
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="navi-arrow">
                                                            <i class="ion ion-ios-arrow-thin-right"></i>
                                                        </a>
                                                    </div>
                                                </div> -->

                                                <!-- <div class="comments-area">
                                                    <div class="list-comments">
                                                        <h3 class="comments-title">
                                                            2 comments
                                                        </h3>
                                                        <ul class="comment-list">
                                                            <li class="comment">
                                                                <img class="avatar" src="assets/images/ava-01.jpg" alt="IMG">
                                                                <div class="content-comment">
                                                                    <div class="author">
                                                                        <span class="author-name">
                                                                            Edugate
                                                                        </span>
                                                                        <span class="comment-extra-info">
                                                                            November 11, 2016 at 9:10 AM
                                                                        </span>
                                                                        <span class="link-reply-edit">
                                                                            <a href="javascript:;" class="comment-reply-link">
                                                                                Reply
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="message">
                                                                        <p>
                                                                            So far, the conversion increase is more due to plain blunt force, but the quality of boss conversions and subsequent leads can be increased
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <ul class="children">
                                                                    <li class="comment">
                                                                        <img class="avatar" src="assets/images/ava-01.jpg" alt="IMG">
                                                                        <div class="content-comment">
                                                                            <div class="author">
                                                                                <span class="author-name">
                                                                                    Edugate
                                                                                </span>
                                                                                <span class="comment-extra-info">
                                                                                    November 11, 2016 at 9:10 AM
                                                                                </span>
                                                                                <span class="link-reply-edit">
                                                                                    <a href="javascript:;" class="comment-reply-link">
                                                                                        Reply
                                                                                    </a>
                                                                                </span>
                                                                            </div>
                                                                            <div class="message">
                                                                                <p>
                                                                                    So far, the conversion increase is more due to plain blunt force, but the quality of boss conversions and subsequent leads can be increased
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="form-comment">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title">
                                                            LEAVE A COMMENT
                                                            <small>
                                                                <a href="javascript:;" style="display:none;">Cancel Reply</a>
                                                            </small>
                                                        </h3>
                                                        <form class="comment-form" novalidate>
                                                            <p class="comment-notes">
                                                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-meta">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p class="comment-form-author">
                                                                            <input placeholder="Your Name *" id="author" name="author" type="text" value size="30" aria-required="true">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="comment-form-email">
                                                                            <input placeholder="Email *" id="email" name="email" type="text" value size="30" aria-required="true">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-message">
                                                                <p class="comment-form-comment">
                                                                    <textarea placeholder="Enter your comment *" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                </p>
                                                            </div>
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit" class="submit" value="submit comment">
                                                                <input type="hidden" name="comment_post_ID" value="362" id="comment_post_ID">
                                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="related-blog">
                                        <h3 class="related-title">
                                            Mas noticias </h3>
                                        <div class="wrap-element">
                                            <div class="list-posts">
                                                <div class="slide-posts js-call-slick-col" data-numofshow="3" data-numofscroll="1" data-loopslide="1" data-autoscroll="0" data-speedauto="6000" data-responsive="[3, 1], [3, 1], [2, 1], [2, 1], [1, 1]">
                                                    <div class="wrap-arrow-slick">
                                                        <div class="arow-slick prev-slick">
                                                            <i class="ion ion-chevron-left"></i>
                                                        </div>
                                                        <div class="arow-slick next-slick">
                                                            <i class="ion ion-chevron-right"></i>
                                                        </div>
                                                    </div>
                                                    <div class="slide-slick">
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-01.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            Hot
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-02.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #ff6c00;">
                                                                            Trend
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-03.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            NEW
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-04.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            HDRip
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-01.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            Hot
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-02.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #ff6c00;">
                                                                            Trend
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-03.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            NEW
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="post-item">
                                                                <div class="pic">
                                                                    <img src="assets/images/post-04.jpg" alt="IMG">
                                                                    <div class="overlay"></div>
                                                                    <div class="meta-info">
                                                                        <div class="imdb">
                                                                            <span class="value">5</span>IMDb
                                                                        </div>
                                                                        <div class="label" style="background: #e40914;">
                                                                            HDRip
                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE" class="btn-play popup-youtube"></a>
                                                                </div>
                                                                <h4 class="title">
                                                                    <a href="single-video.html">
                                                                        How To Make a Pimple Disappear With Makeup
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </main>

                            <? include("parts/colum.php"); ?>

                        </div>
                    </div>
                </div>
            </div>
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

    <script src="assets/js/libs/sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/thim-custom.js"></script>
    <div id="back-to-top" class="btn-back-to-top">
        <i class="ion ion-ios-arrow-thin-up"></i>
    </div>
</body>

<!-- Mirrored from html.thimpress.com/vividly/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 11:33:06 GMT -->

</html>