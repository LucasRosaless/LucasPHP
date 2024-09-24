<?
include_once("inc/conexion.php");

$ulti = tomarRegistros($mysqli, "noticias", "id", "desc limit 10");
$notigeneral = tomarRegistros($mysqli, "noticias", "id", "desc limit 8");
$redes = tomarRegistro($mysqli, "social", "id");
$publicidad = tomarRegistros($mysqli, "publicidad", "id", "desc");
$categorias = tomarRegistros($mysqli, "categorias", "id", "desc limit 10");

?>
<style>
    .freeYess-yesImg {
    
        display: none;
    }
</style>
<header class="site-header sticky-header layout-1">
    <div class="header-container">
        <div class="top-header">
            <div class="container">
                <div class="wrap-content-header">
                    <div class="header-logo" style="width: 30%">
                        <a href="index.php" class="logo">
                            <img src="<? include("parts/logo.php"); ?>" alt="IMG">
                        </a>
                        <a href="index.php" class="mobile-logo">
                            <img src="<? include("parts/logo.php"); ?>" alt="IMG">
                        </a>
                        <a href="index.php" class="sticky-logo">
                            <img src="<? include("parts/logo.php"); ?>" alt="IMG">
                        </a>
                    </div>
                    <div class="right-logo">
                        <div class="widget_thim_layout_builder">
                            <div class="wpb_wrapper">

                                <div class="bp-element bp-element-st-search-videos vblog-layout-header-1">
                                    <div class="wrap-element">
                                        <form class="search-form" method="get" action="buscar.php">
                                            <!-- <label class="wrap-select2" data-style="vblog-search">
                                                <select>
                                                    <option>Movies</option>
                                                    <option>Videos</option>
                                                    <option>Categories</option>
                                                    <option>Popular</option>
                                                </select>
                                            </label> -->
                                            <input type="search" id="s" name="s" class="search-field"
                                                placeholder="Busca una Noticia" />
                                            <button class="btn-search">
                                                <i class="ion ion-android-search"></i>
                                            </button>
                                        </form>
                                        <ul class="list-search-videos">
                                        </ul>
                                    </div>
                                </div>


                                <div class="bp-element bp-element-social-links vblog-layout-header-1">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header element-to-stick">
            <div class="container">
                <div class="wrap-content-header">
                    <div class="menu-mobile-effect navbar-toggle">
                        <div class="text-menu">
                            Menu
                        </div>
                        <div class="icon-wrap">
                            <i class="ion-navicon"></i>
                        </div>
                    </div>
                    <nav class="main-navigation">
                        <ul class="menu-lists">

                            <li class="menu-item-has-children">
                                <a href="index.php">
                                    Inicio
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="categorias.php">
                                    Categorias
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contenido.php?id=9">
                                    Historia </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="envivo.php">
                                    Escuchanos </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contacto.php">
                                    Contacto </a>
                            </li>

                        </ul>

                    </nav>

                    <div style="padding: 10px;width: 300px;">
                        <div id="p1"></div>
                    </div>
                    <!-- <div class="menu-right">
                        <div class="bp-element bp-element-button">
                            <a href="submit-video.html" class="btn">
                                <i class="ion ion-upload"></i>
                                SUBMIT VIDEO
                            </a>
                        </div>

                        <div class="bp-element-login-popup layout-1 show-icon">
                            <div class="login-links">
                                <a class="login" data-active=".box-login" data-effect="mfp-zoom-in"
                                    href="#bp-popup-login">
                                    Login
                                </a>
                            </div>
                            <div id="bp-popup-login" class="white-popup mfp-with-anim mfp-hide">
                                <div class="loginwrapper">

                                    <div class="login-popup box-register">
                                        <div class="media-content"
                                            style="background-image: url(assets/images/bg-01.jpg);"></div>
                                        <div class="inner-login">
                                            <h3 class="title">
                                                <span class="current-title">Register</span>
                                                <span>
                                                    <a href="#login" class="display-box"
                                                        data-display=".box-login">Login</a>
                                                </span>
                                            </h3>
                                            <div class="form-row">
                                                <div class="wrap-form">
                                                    <div class="form-desc">
                                                        We will need...
                                                    </div>
                                                    <form id="registerform">
                                                        <p class="login-username">
                                                            <input type="text" placeholder="Username"
                                                                class="input">
                                                        </p>
                                                        <p class="login-email">
                                                            <input type="email" name="user_email"
                                                                placeholder="Email" class="input">
                                                        </p>
                                                        <p class="text-mail">
                                                            We send your registration email to this address.
                                                        </p>
                                                        <p class="button-submit">
                                                            <input type="submit" name="wp-submit-register"
                                                                class="button button-primary button-large"
                                                                value="Register" />
                                                            <input type="hidden" name="redirect_to" value />
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="login-popup box-login">
                                        <div class="media-content"
                                            style="background-image: url(assets/images/bg-01.jpg);"></div>
                                        <div class="inner-login">
                                            <h3 class="title">
                                                <span>
                                                    <a href="#register" class="display-box"
                                                        data-display=".box-register">Registration</a>
                                                </span>
                                                <span class="current-title">Login</span>
                                            </h3>
                                            <div class="form-row">
                                                <div class="wrap-form">
                                                    <div class="form-desc"> We will need... </div>
                                                    <form id="loginform">
                                                        <p class="login-username">
                                                            <input type="text" placeholder="Username"
                                                                class="input">
                                                        </p>
                                                        <p class="login-email">
                                                            <input type="email" name="user_email"
                                                                placeholder="Email" class="input">
                                                        </p>
                                                        <p class="login-remember">
                                                            <input type="checkbox" name="rememberme"
                                                                id="rememberme" value="forever"> Remember Me
                                                        </p>
                                                        <p class="button-submit">
                                                            <input type="submit" name="wp-submit-register"
                                                                class="button button-primary button-large"
                                                                value="Register" />
                                                            <input type="hidden" name="redirect_to" value />
                                                        </p>
                                                        <p class="link-bottom"><a href="#losspw"
                                                                class="display-box"
                                                                data-display=".box-lostpass"></a>
                                                        </p>
                                                    </form>
                                                    <p class="link-bottom"><a href="#losspw" class="display-box"
                                                            data-display=".box-lostpass">Lost your password?
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="login-popup box-lostpass">
                                        <div class="login-popup box-lostpass">
                                            <div class="media-content"
                                                style="background-image: url(assets/images/bg-01.jpg);"></div>
                                            <div class="inner-login">
                                                <h3 class="title">
                                                    <span>
                                                        <a href="#register" class="display-box"
                                                            data-display=".box-register">Registration</a>
                                                    </span>
                                                    <span class="current-title"> Reset Password</span>
                                                </h3>
                                                <div class="form-row">
                                                    <form name="lostpasswordform" id="lostpasswordform"
                                                        method="post">
                                                        <p class="description"> Please enter your username or
                                                            email address. You will receive a link to create a
                                                            new password via email.
                                                        </p>
                                                        <p class="login-username">
                                                            <input placeholder="Username or email" type="text"
                                                                name="user_login_lostpass"
                                                                id="user_login_lostpass" class="input" />
                                                        </p>
                                                        <p>
                                                            <input type="submit" name="wp-submit-lostpass"
                                                                id="wp-submit-lostpass"
                                                                class="button button-primary button-large"
                                                                value="Reset password" />
                                                        </p>
                                                        <p class="link-bottom"> Are you a member?
                                                            <a href="#login" class="display-box"
                                                                data-display=".box-login"> Sign in now </a>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .mobile-menu-container .navbar-nav li .icon-toggle {

        display: none;
    }
</style>
<nav class="mobile-menu-container mobile-effect">
    <div class="inner-menu">
        <ul class="nav navbar-nav">
            <li class="menu-item-has-children">
                <a href="index.php">
                    Inicio
                </a>
            </li>
            <li class="menu-item-has-children">
                <a href="categorias.php">
                    Categorias
                </a>
            </li>
            <li class="menu-item-has-children">
                <a href="contenido.php?id=9">
                    Historia </a>
            </li>
            <li class="menu-item-has-children">
                <a href="envivo.php">
                    Escuchanos </a>
            </li>
            <li class="menu-item-has-children">
                <a href="contacto.php">
                    Contacto </a>
            </li>
        </ul>
        <div class="widget-area">
            <aside class="widget widget_nav_menu">
                <div class="menu-useful-links-container">
                    <ul class="menu">
                        <? foreach ($categorias as $cates) { ?>

                            <li class="menu-item">
                                <a href="categorias.php?sec=<?= $cates["id"] ?>"><?= $cates["nombre"]; ?></a>
                            </li>
                        <? } ?>

                    </ul>
                </div>
            </aside>
            <aside class="widget widget_text">
                <div class="textwidget">
                    <div class="copyright-text">
                        Copyright 2024 Theme by <a
                            href="https://gostreaming.com.ar">Go Streaming</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</nav>