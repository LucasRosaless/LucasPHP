<?
include_once("inc/conexion.php");
$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 10");
$notfot = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 4", "tipo = '4'");
$text = tomarRegistro($mysqli, "textos", "id = '4'");
?>
<footer class="site-footer layout-1">
    <div class="footer-sidebars">
        <div class="container">
            <div class="thim-3-col">
                <aside class="widget widget_thim_layout_builder">
                    <div class="wpb_single_image" style="width: 50%; margin: auto;">
                        <img src="<? include("parts/logo.php"); ?>" alt="logo" />
                    </div>
                    <div class="wpb_text_column">
                        <p>
                            <?= $text["descripcion"]; ?>
                        </p>
                    </div>
                    <!-- <form class="yikes-easy-mc-form layout-footer">
                        <label>
                            <input type="email" name="Email" placeholder="Email">
                        </label>
                        <button type="submit">SUBSCRIBE</button>
                    </form> -->

                    <div class="bp-element bp-element-social-links vblog-layout-footer">
                        <div class="wrap-element">

                            <?php if (!empty($contacto["whatsapp_radio"])) { ?>
                                <a href="https://wa.me/<?= $contacto["whatsapp_radio"]; ?>" class="social-item">
                                    <i class="ion ion-social-whatsapp"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["facebook"])) { ?>
                                <a href="<?= $social["facebook"]; ?>" class="social-item">
                                    <i class="ion ion-social-facebook"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["twitter"])) { ?>
                                <a href="<?= $social["twitter"]; ?>" class="social-item">
                                    <i class="ion ion-social-twitter"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["vimeo"])) { ?>
                                <a href="<?= $social["vimeo"]; ?>" class="social-item">
                                    <i class="ion ion-social-vimeo"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["youtube"])) { ?>
                                <a href="<?= $social["youtube"]; ?>" class="social-item">
                                    <i class="ion ion-social-youtube"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["googleplus"])) { ?>
                                <a href="<?= $social["googleplus"]; ?>" class="social-item">
                                    <i class="ion ion-social-googleplus"></i>
                                </a>
                            <?php } ?>

                            <?php if (!empty($social["instagram"])) { ?>
                                <a href="<?= $social["instagram"]; ?>" class="social-item">
                                    <i class="ion ion-social-instagram-outline"></i>
                                </a>
                            <?php } ?>

                        </div>
                    </div>
                </aside>
                <aside class="widget widget_thim_layout_builder">

                    <div class="bp-element bp-element-posts vblog-layout-list-footer">
                        <div class="wrap-element">
                            <div class="heading-post">
                                <h3 class="title">
                                    ULTIMAS NOTCIAS </h3>
                            </div>
                            <div class="list-posts">
                                <? foreach ($notfot as $not) { ?>
                                    <div class="item">
                                        <div class="pic">
                                            <a href="single-blog.html">
                                                <div style="width: 100% ; height: 60px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $not['imagen']; ?>); background-size: cover; background-position:center;" alt="IMG"></div>
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h4 class="title">
                                                <a href="single-blog.html">
                                                    <?= htmlspecialchars(substr($not['titulo'], 0, 36)); ?>...
                                                </a>
                                            </h4>
                                            <div class="date">
                                                <?= htmlspecialchars(substr($not['encabezado'], 0, 40)); ?>...
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>

                </aside>
                <aside class="widget widget_thim_layout_builder">

                    <div class="bp-element bp-element-categories layout-list-1">
                        <div class="wrap-element">
                            <h3 class="title">
                                POPULAR CATEGORY
                            </h3>
                            <ul class="list-categories">
                                <? foreach ($categorias as $cates) { ?>
                                    <li class="cat-item">
                                        <a href="categorias.php?sec=<?= $cates["id"] ?>"><?= $cates["nombre"]; ?></a>
                                    </li>
                                <? } ?>
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="thim-1-col">
                <div class="copyright-text">
                    Copyright 2024 Theme by <a
                        href="https://gostreaming.com.ar">Go Streaming</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://radiowink.com/dist/freeV3.js"></script>
<script>
    var p1 = new freeYess({
        target: '#p1',
        url: 'https://vps-6de10815.vps.ovh.ca/8214',
        platform: 'ic',
        mountPoint: 'stream',
        logo: 'https://www.yesstreaming.com/img/default.png',
        artistc: 'E30914',
        songtitlec: 'FFFFFF',
        buttonc: 'E30914',
        bg: 'FFFFFF',
        artwork: '1',
        autoplay: 'false',
    })
</script>