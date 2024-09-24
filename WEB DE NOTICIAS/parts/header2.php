<?
include_once("inc/conexion.php");
$naci = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc", "categoria = '13'");

?>
<section class="ticker-news">

    <div class="container">
        <div class="ticker-news-box">
            <span class="breaking-news">Ultimas Noticias</span>
            <span class="new-news">New</span>
            <ul id="js-news">
                <? foreach ($ulti as $top) { ?>
                    <li class="news-item"><span class="time-news"><?= $top["fecha"]; ?></span> <a href="not.php?id=<?= $top["id"]; ?>"><?= substr($top["titulo"], 0, 150); ?> </li>
                <? } ?>
            </ul>
        </div>
    </div>

</section>
<!-- End ticker-news-section -->

<header class="clearfix fifth-style">
    <!-- Bootstrap navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <!-- Top line -->
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="top-line-list">
                        

                            <li><span class="time-now"><?= $fecha_actual; ?></span></li>
                            <!-- <li><a href="#">Log In</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Purchase Theme</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="social-icons">
                            <? if ($social["facebook"] != "") { ?>
                                <li><a class="facebook" href="<?= $social["facebook"]; ?>"><i class="fa fa-facebook"></i></a></li>
                            <? } ?>

                            <? if ($social["twitter"] != "") { ?>
                                <li><a class="twitter" href="<?= $social["twitter"]; ?>"><i class="fa fa-twitter"></i></a></li>
                            <? } ?>

                            <? if ($social["instagram"] != "") { ?>
                                <li><a class="pinterest" href="<?= $social["instagram"]; ?>"><i class="fa fa-instagram"></i></a></li>
                            <? } ?>

                            <? if ($social["google"] != "") { ?>
                                <li><a class="google" href="<?= $social["google"]; ?>"><i class="fa fa-google-plus"></i></a></li>
                            <? } ?>

                            <? if ($social["linkedin"] != "") { ?>
                                <li><a class="linkedin" href="<?= $social["linkedin"]; ?>"><i class="fa fa-linkedin"></i></a></li>
                            <? } ?>

                            <? if ($social["pinterest"] != "") { ?>
                                <li><a class="pinterest" href="<?= $social["pinterest"]; ?>"><i class="fa fa-pinterest"></i></a></li>
                            <? } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top line -->

        <!-- navbar list container -->

        <!--
                    colors:
                    drop - Rojo
                    world - Celeste
                    travel - Marron
                    tech - Verde
                    fashion - Violeta
                    video - Dorado
                    sport - Azul
                    food - Verde Agua




                                            -->
        <div class="nav-list-container">
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">

                        <li class="drop"><a class="home" href="index.php">incio</a>

                            <ul class="dropdown">
                                <li><a href="index.php">Inicio 1</a></li>
                                <li><a href="index2.php">Inicio 2</a></li>

                            </ul>
                        </li>
                        <li><a class="world" href="categorias.php">Categorias</a>
                            <div class="megadropdown">
                                <div class="container">
                                    <div class="inner-megadropdown world-dropdown">
                                        <div class="filter-block">
                                            <ul class="filter-posts">

                                                <? foreach ($cates as $cate) { ?>
                                                    <li>
                                                        <a href="categorias.php?sec=<?= $cate["id"]; ?>"><?= $cate["nombre"]; ?></a>
                                                    </li>
                                                <? } ?>

                                            </ul>
                                        </div>
                                        <div class="posts-filtered-block">
                                            <div class="owl-wrapper">
                                                <h1>NACIONALES</h1>
                                                <div class="owl-carousel" data-num="4">


                                                    <? foreach ($naci as $ns) { ?>
                                                        <div class="item news-post standard-post">
                                                            <div class="post-gallery">
                                                                <div style="width: 100% ; height: 150px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $ns['imagen']; ?>); background-size: cover; background-position: center;"></div>
                                                            </div>
                                                            <div class="post-content">
                                                                <h2><a href="not.php?id=<?=$mas["id"];?>"><?= substr($ns['titulo'],0,90) ;?></a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i><?=$ns["fecha"];?></li>
                                                                    <li><a href="#"><i class="fa fa-eye"></i><span><?=$ns["visualizaciones"];?></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    <? } ?>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="sport" href="contenido.php?id=9">Historia</a></li>
                        <li><a class="food" href="contacto.php">Contacto</a></li>

                    </ul>
                    <form class="navbar-form navbar-right" action="buscar.php" method="get" role="search">
                        <input type="text" id="s" name="s" placeholder="Buscar Aqui">
                        <button type="submit" id="s"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- End navbar list container -->

        <!-- Logo & advertisement -->
        <div class="logo-advertisement">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="padding: 10px 0px 0px;" class="navbar-brand" href="index.php"><img style="max-width: 460px;padding: 6px;" src="<? include("parts/logo_black.php"); ?>" alt=""></a>
                </div>

            </div>
        </div>
        <!-- End Logo & advertisement -->

    </nav>
    <!-- End Bootstrap navbar -->

</header>