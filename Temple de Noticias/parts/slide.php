<?
include_once("inc/conexion.php");

$sli = tomarRegistrosCondicion($mysqli, "noticias", "id", "desc limit 3", "tipo='1'");

?>
<style>
    .label {
        transition: background-color 0.3s ease;
        /* Ajuste de la duración y suavidad de la transición */
        background: #e30013;
    }

    .label:hover {
        background: #940007;
    }
</style>

<div class="thim-posts_home-2">

    <div class="bp-element bp-element-st-list-videos vblog-layout-2">
        <div class="wrap-element">
            <div class="row no-gutters">
                <? foreach ($sli as $ss) { ?>
                    <div class="col-md-4">
                        <div class="video-item">

                            <div style="width: 100% ; height: 390px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $ss['imagen']; ?>); background-size: cover; background-position:center;" alt="IMG"></div>

                            <div class="overlay"></div>
                            <div class="content">
                                <div class="meta-info">
                                    <? $categoria = tomarRegistro($mysqli, "categorias", "id = " . $ss["categoria"]); ?>

                                    <a href="categorias.php?sec=<?= $ss["categoria"]; ?>">
                                        <div class="label">
                                            <?= $categoria["nombre"]; ?>
                                        </div>
                                    </a>
                                    <div class="imdb">
                                        <i class="ion ion-eye"></i>
                                        <?= $ss["visualizaciones"]; ?>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="not.php?id=<?= $ss["id"]; ?>">
                                        <?= htmlspecialchars(substr($ss['titulo'], 0, 90)); ?>
                                    </a>
                                </h4>
                                <p style="font-size: 12px;">
                                    <a href="not.php?id=<?= $ss["id"]; ?>" style="color: #fff">
                                        <?= htmlspecialchars(substr($ss['encabezado'], 0, 100)); ?>
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>

</div>