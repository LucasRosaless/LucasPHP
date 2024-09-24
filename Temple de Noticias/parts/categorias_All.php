<?
include_once("inc/conexion.php");

$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 6");
$notis = tomarRegistros($mysqli, "noticias", "id", "desc limit 10");
?>
<div class="thim-latest-video_home-2">
    <div class="container">
        <div class="bp-element bp-element-st-list-videos vblog-layout-grid-2">
            <div class="wrap-element">
                <div class="heading-post">
                    <div class="wrap-title">
                        <h3 class="title">
                            Todas las Noticias </h3>
                        <!-- <a href="list-videos.html" class="link">
                            See all news
                        </a> -->
                    </div>
                    <!-- <div class="categories">
                        <ul>
                            <li class="current-cat" data-category="cinema">
                                <a href="javascript:;">CINEMA</a>
                            </li>

                            <li data-category="music">
                                <a href="javascript:;">MUSIC</a>
                            </li>
                            <li data-category="sport">
                                <a href="javascript:;">SPORT</a>
                            </li>
                            <li data-category="tech">
                                <a href="javascript:;">TECH</a>
                            </li>
                            <li data-category="fashion">
                                <a href="javascript:;">FASHION</a>
                            </li>
                            <li data-category="animation">
                                <a href="javascript:;">ANIMATION</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="grid-posts">
                    <? foreach ($notis as $nnn) { ?>
                        <div class="grid-item">
                            <div class="post-item">
                                <div class="pic">
                                    <a href="not.php?id=<?= $nnn["id"]; ?>">
                                        <img style="width: 100% ; height: 240px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $nnn['imagen']; ?>); background-size: cover; background-position:center;"></img>
                                    </a>

                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <!-- <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div> -->
                                        <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $nnn["categoria"]); ?>
                                        <a href="categorias.php?sec=<?= $nnn["categoria"]; ?>">
                                            <div class="label">
                                                <?= $categoria["nombre"]; ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title" style="margin-bottom: 3px;">
                                    <a href="not.php?id=<?= $nnn["id"]; ?>" style="color: #111;font-weight: 500;font-size: 16px;line-height: 1.1111;"> <?= htmlspecialchars(substr($nnn['titulo'], 0, 90)); ?>
                                    </a>
                                </h4>
                                <div class="info">
                                    <?= htmlspecialchars(substr($nnn['encabezado'], 0, 70)); ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>