<?
include_once("inc/conexion.php");
include_once("control_log.php");

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);
echo $path;

$homevisit = tomarRegistro($mysqli, "visitas", "seccion ='home'");
$productosvisit = tomarRegistro($mysqli, "visitas", "seccion ='productos'");
$productosavisit = tomarRegistro($mysqli, "visitas", "seccion ='productosa'");
$productosmvisit = tomarRegistro($mysqli, "visitas", "seccion ='productosm'");
$tellamamosvisit = tomarRegistro($mysqli, "visitas", "seccion ='tellamamos'");
$tarjetavisit = tomarRegistro($mysqli, "visitas", "seccion ='tarjeta'");

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Panel de administración</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.min.css">


    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page ">

    <!-- Body Wrap  -->
    <div id="main">

        <!-- Header  -->
        <?php include("header.php"); ?>

        <?php include("botonera.php"); ?>

        <section id="content_wrapper">

            <!-- Topbar -->
            <header id="topbar" class="alt">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-icon">
                            <a href="index.html">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-link">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-current-item">Visitas</li>
                    </ol>
                </div>
            </header>

            <? include("meses2.php"); ?>
            <!-- /Topbar -->

            <div class="alert alert-success" role="alert">


                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true" style="color: blanchedalmond"></span>
                </button>
                <h2>inicio</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $homevisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div>
                    <a href="+visitas.php?seccion=home" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                </div>

            </div>

            <div class="alert alert-warning" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true" style="color: blanchedalmond"></span>
                </button>
                <h2>Productos</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $productosvisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div>
                    <a href="+visitas.php?seccion=productos" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                </div>
            </div>

            <div class="alert alert-info" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true" style="color: blanchedalmond"></span>
                </button>
                <h2>Productos individuales</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $productosavisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div>
                    <a href="+visitas.php?seccion=productosa" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                </div>
                <div>
                    <a href="indivuduales.php" style="color: white; text-decoration: none;">Listar las visitas de click a MercadoShops</a>
                </div>
            </div>

            <div class="alert alert-dark" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true"></span>
                </button>
                <h2 style="color: white;">Productos Categorias</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $productosmvisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div>
                    <a href="+visitas.php?seccion=productosm" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                </div>
            </div>

            <div class="alert alert-success" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true"></span>
                </button>
                <h2>#TeLLamamos</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $tellamamosvisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div class="col-sm-12">
                    <div>
                        <a href="+visitas.php?seccion=tellamamos" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                    </div>

                </div>
            </div>

            <div class="alert alert-warning" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true" style="color: blanchedalmond"></span>
                </button>
                <h2>Tarjeta</h2>
                <strong style="font-size: 50px; margin-left: 20px;"><?= $tarjetavisit["vizualizaciones"]; ?> <strong style="font-size: 30px;">visitas</strong> </strong>
                <div>
                    <a href="+visitas.php?seccion=tarjeta" style="color: white; text-decoration: none;">Listar Todas las visitas +</a>
                </div>
            </div>

        
        </section>
        
        </section>
        <!-- /Main Wrapper -->

    </div>
    <!-- /Body Wrap  -->

    <!-- Scripts -->

    <!-- jQuery -->
    <script src="assets/js/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
    <!-- <script src="assets/js/utility/fullscreen/jquery.fullscreen.js"></script> -->

    <!-- HighCharts Plugin -->
    <script src="assets/js/plugins/highcharts/highcharts.js"></script>
    <script src="assets/js/plugins/c3charts/d3.min.js"></script>
    <script src="assets/js/plugins/c3charts/c3.min.js"></script>

    <!-- Simple Circles Plugin -->
    <script src="assets/js/plugins/circles/circles.js"></script>

    <!-- Maps JSs -->
    <script src="assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
    <script src="assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

    <!-- FullCalendar Plugin -->
    <script src="assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- Date/Month - Pickers -->
    <script src="assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
    <script src="assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>

    <!-- Magnific Popup Plugin -->
    <script src="assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

    <!-- Theme Scripts -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Widget JS -->
    <script src="assets/js/demo/widgets.js"></script>
    <script src="assets/js/demo/widgets_sidebar.js"></script>
    <script src="assets/js/pages/dashboard1.js"></script>
    <!-- /Scripts -->
    <script>
        const mainContainers = document.querySelectorAll('.alert-success');
        const listContainers = document.querySelectorAll('.listContainer');

        mainContainers.forEach((mainContainer, index) => {
            mainContainer.addEventListener('click', function() {
                listContainers[index].style.display = (listContainers[index].style.display === 'none' || listContainers[index].style.display === '') ? 'block' : 'none';
            });
        });
    </script>

</body>

</html>
