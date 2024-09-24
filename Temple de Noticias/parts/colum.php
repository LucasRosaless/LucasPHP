<div class="widget-area col-sm-9 col-md-8 col-lg-3 sticky-sidebar">
    <aside class="widget widget_product_categories">
        <h3 class="widget-title">
            Publicidad
        </h3>
        <ul class="product-categories">

            <? foreach ($publicidad as $pub) { ?>
                <li>
                    <div class="banner_inner">
                        <img href="<?= $pub["link"]; ?>" class="img-responsive" src="images/sitio/<?= $pub["imagen"]; ?>" alt="image">
                    </div>
                </li>
            <? } ?>
        </ul>
    </aside>
    <aside class="widget widget_thim_layout_builder">

        <div class="bp-element bp-element-products vblog-layout-list-1">
            <div class="wrap-element">
                <div class="heading-products">
                    <h3 class="title">
                        Ultimas </h3>
                </div>
                <div class="list-products">

                    <? foreach ($uult as $uuu) { ?>
                        <div class="product-item">
                            <a href="not.php?id=<?= $uuu["id"]; ?>" class="pic">
                            <img style="width: 100% ; height: 70px ; background-image: url(<?= $ruta; ?>images/noticias/<?= $uuu['imagen']; ?>); background-size: cover; background-position: center;"></img>
                            </a>
                            <div class="text">
                                <h4 class="title">
                                    <a href="not.php?id=<?= $uuu["id"]; ?>">
                                        <?= htmlspecialchars(substr($uuu['titulo'], 0, 76)); ?></a>
                                </h4>
                                <span class="price">

                                    <span class="woocommerce-Price-amount">
                                        <?= htmlspecialchars(substr($uuu['encabezado'], 0, 50)); ?> ...
                                    </span>

                                </span>
                            </div>
                        </div>
                    <? } ?>

                </div>
            </div>
        </div>

    </aside>
    <aside class="widget widget_tag_cloud">
        <h3 class="widget-title">
            Categorias </h3>

        <div class="tagcloud">

            <? foreach ($categorias as $cates) { ?>
                <a href="categorias.php?sec=<?= $cates["id"] ?>" class="tag-cloud-link">
                    <?= $cates["nombre"]; ?>
                </a>
            <? } ?>

        </div>

    </aside>

</div>