<?
include_once("inc/conexion.php");

$categorias = tomarRegistros($mysqli, "categorias", "id", "asc");

//-----------------
$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 8");
$slide = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 8", "tipo = '1'");
$princ = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 3", "tipo = '5'");
//-----------------


$social = tomarRegistro($mysqli, "social", "id");
$contact = tomarRegistro($mysqli, "contacto", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc limit 6");
$cates = tomarRegistros($mysqli, "categorias", "id", "desc");


?>
<section class="heading-news">
    <div style="margin-bottom: -850px;" class="iso-call heading-news-box">
        <? $primer = 1;
        foreach ($slide as $se) {
            if ($primer == 1) {
        ?>
                <div class="news-post image-post default-size">
                    <div style="width: 100%; height: 227px; background-image: url(<?= $ruta; ?>images/noticias/<?= $se['imagen']; ?>); background-size: cover; background-position:center;"></div>
                    <div class="hover-box">
                        <div class="inner-hover">
						<? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $se["categoria"]); ?>
                            <a class="category-post world" href="categorias.php?sec=<?= $se["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
                            <h2><a href="not.php?id=<?= $se["id"]; ?>"><?= substr($se['titulo'], 0, 60); ?></a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><span><?=$se["fecha"];?></span></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i><span><?=$se["visualizaciones"];?></span></a></li>
                            </ul>
                            <p><?= substr($se['encabezado'], 0, 60);?></p>
                        </div>
                    </div>
                </div>
        <? $primer++;
            }
        } ?>
        <div class="image-slider snd-size">
            <span class="top-stories">DESTACADAS</span>
            <ul class="bxslider">
                <? foreach ($princ as $pp) { ?>
                    <li>
                        <div class="news-post image-post">
                            <div style="width: 100%; height: 452px; background-image: url(<?= $ruta; ?>images/noticias/<?= $pp['imagen']; ?>); background-size: cover; background-position:center;"></div>
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $pp["categoria"]); ?>
                                    <a class="category-post world" href="categorias.php?sec=<?= $pp["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
                                    <h2><a href="not.php?id=<?= $pp["id"]; ?>"><?= substr($pp['titulo'], 0, 90); ?></a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i><?= $pp["fecha"]; ?></li>
                                        <li><i class="fa fa-eye"></i><?= $pp["visualizaciones"]; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                <? } ?>
            </ul>
        </div>
        <? $prime = 1;
        foreach ($slide as $ss) {
            if ($prime != 1) { ?>
                <div class="news-post image-post">
                    <div style="width: 100%; height: 227px; background-image: url(<?= $ruta; ?>images/noticias/<?= $ss['imagen']; ?>); background-size: cover; background-position:center;"></div>
                    <div class="hover-box">
                        <div class="inner-hover">
                            <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $ss["categoria"]); ?>
                            <a class="category-post world" href="categorias.php?sec=<?= $ss["categoria"]; ?>"><?= $categoria["nombre"]; ?></a>
                            <h2><a href="not.php?id=<?= $ss["id"]; ?>"><?= substr($ss['titulo'], 0, 60); ?></a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><span><?= $ss["fecha"]; ?></span></li>
                                <li><a href="#"><i class="fa fa-eye"></i><span><?= $ss["visualizaciones"]; ?></span></a></li>
                            </ul>
                            <p><?= substr($ss['encabezado'], 0, 90); ?></p>
                        </div>
                    </div>
                </div>
        <? }
            $prime++;
        } ?>
    </div>
</section>
