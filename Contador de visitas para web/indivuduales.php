<?
include_once("inc/conexion.php");
include_once("control_log.php");

$mes = isset($_POST['mes']) ? $_POST['mes'] : (isset($_GET['mes']) ? $_GET['mes'] : date("m"));


if ($mes == "") {
    $visitas = tomarRegistros($mysqli, "mercado_ip", "visitas", "desc limit 200 GROUP BY id_producto");
} else {
    $visitas = tomarRegistrosCondicion($mysqli, "mercado_ip", "visitas", "desc limit 200", "mesi= '$mes' GROUP BY id_producto");
}

// // $productos = tomarRegistrosCondicion($mysqli, "productos", "id", "asc", "codigo_articulo = '$referencia'"); 
// $visitas = tomarRegistros($mysqli, "productos", "clicks_mp, visualizaciones", "desc limit 200");
// $visitast = tomarRegistrosCondicion($mysqli, "visitas_ip", "id", "desc", "seccion ='$sec' and mesi = '$mes'");

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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .table th,
        .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body class="dashboard-page ">

    <!-- Body Wrap  -->
    <div id="main">
        <?
        if ($_POST['mes'] == "01") {
            $mimes = 'Enero';
        }
        if ($_POST['mes'] == "02") {
            $mimes = 'Febrero';
        }
        if ($_POST['mes'] == "03") {
            $mimes = 'Marzo';
        }
        if ($_POST['mes'] == "04") {
            $mimes = 'Abril';
        }
        if ($_POST['mes'] == "05") {
            $mimes = 'Mayo';
        }
        if ($_POST['mes'] == "06") {
            $mimes = 'Junio';
        }
        if ($_POST['mes'] == "07") {
            $mimes = 'Julio';
        }
        if ($_POST['mes'] == "08") {
            $mimes = 'Agosto';
        }
        if ($_POST['mes'] == "09") {
            $mimes = 'Septiembre';
        }
        if ($_POST['mes'] == "10") {
            $mimes = 'Octubre';
        }
        if ($_POST['mes'] == "11") {
            $mimes = 'Noviembre';
        }
        if ($_POST['mes'] == "12") {
            $mimes = 'Diciembre';
        }
        ?>

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
                        <li class="breadcrumb-current-item">Escritorio</li>
                    </ol>
                </div>
            </header>

            <div class="grafica" style="padding: 40px;">
                <h2>Selecciona un Mes: </h2><br>
                <? include("meses2.php"); ?>
            </div>
            <!-- /Topbar -->

            <!-- Content -->
            <section id="content" class="table-layout animated fadeIn">
                <!-- Column Center -->
                <div class="chute chute-center">
                    <!-- Quick Links -->
                    <!-- AllCP Info -->
                    <div class="allcp-panels fade-onload">

                        <div class="row">

                            <!-- AllCP Grid -->
                            <div class="col-md-12 allcp-grid">


                                <div class="text-dark lh20 fs26">VISITAS<br><br>
                                </div>
                                <style>
                                    .card {
                                        background-color: #fff;
                                        padding: 30px;
                                        border-radius: 26px;
                                        filter: drop-shadow(1px 2px 10px #2c324217);
                                    }
                                </style>
                                <div class="container mt-3">

                                    <script>
                                        function redireccionar() {
                                            // Obtener el valor seleccionado del mes
                                            var mesSeleccionado = document.getElementById("mes").value;

                                            // Construir la URL de redirección
                                            var url = "https://konectadigital.com.ar/site/whm_admin/indivuduales.php?mes=" + mesSeleccionado;
                                            window.location.href = url;
                                        }
                                    </script>
                                </div>
                                <div class="row">
                                    <?php foreach ($visitas as $hiper): ?>
                                        <? $hip = tomarRegistro($mysqli, "productos", "id = '" . $hiper["id_producto"] . "'"); ?>

                                        <? if ($hip["link"] != "" && $hip["activo"] == '1') { ?>
                                            <div class="col-md-3" style="margin-bottom: 20px; height: 460px;">
                                                <div class="card">
                                                    <a href="https://konectadigital.com.ar/site/productosa.php?id=<?= $hip["id"]; ?>">
                                                        <? if ($hip['imagen'] != "") { ?>

                                                            <div style="width: 100% ; height: 200px ; background-image: url(../images/fotos/<?= $hip['imagen']; ?>); background-size: cover; background-position:center;"></div>

                                                        <? } else { ?>
                                                            <div style="width: 100% ; height: 200px ; background-image: url(../noimagen.jpg); background-size: cover; background-position:center;"></div>

                                                        <? } ?>
                                                    </a>

                                                    <div class="card-body">
                                                        <a href="https://konectadigital.com.ar/site/productosa.php?id=<?= $hip["id"]; ?>">
                                                            <p class="card-title"><b><?= substr($hip['titulo'], 0, 80); ?></b></p>
                                                        </a>
                                                        <p class="card-text">Visitas = <?= $hip["visualizaciones"]; ?></p>
                                                        <p class="card-text">Clicks MP = <?= $hip['clicks_mp']; ?></p>
                                                        <!-- <a href="../productosa.php?id=<?= $hiper["id_producto"]; ?>">--</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <? } ?>
                                    <?php endforeach; ?>

                                    <!-- /AllCP Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </div>
    <!-- /Column Center -->
    <!-- /Content -->

    <!-- Page Footer -->
    <!-- <footer id="content-footer">
        <div class="row">
            <div class="col-md-6">
                <span class="footer-legal">Copyright ilive © 2016. All rights reserved. <a href="http://ilive.com.ar">Política de uso</a> | <a href="#">Contenido</a></span>
            </div>
            <div class="col-md-6 text-right">
                <span class="footer-meta"></span>
                <a href="#content" class="footer-return-top">
                    <span class="fa fa-angle-up"></span>
                </a>
            </div>
        </div>
    </footer> -->
    <!-- /Page Footer -->

    </section>
    <!-- /Main Wrapper -->

    </div>
    <!-- /Body Wrap  -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
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

</body>

</html>