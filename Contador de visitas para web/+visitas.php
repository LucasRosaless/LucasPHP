<?
include_once("inc/conexion.php");
include_once("control_log.php");

$mes = isset($_POST['mes']) ? $_POST['mes'] : (isset($_GET['mes']) ? $_GET['mes'] : date("m"));


if ($mes == "") {
    $mes = date("m");
}

$sec = $_GET["seccion"];

// $productos = tomarRegistrosCondicion($mysqli, "productos", "id", "asc", "codigo_articulo = '$referencia'"); 
$visitas = tomarRegistrosCondicion($mysqli, "visitas_ip", "id", "desc limit 200", "seccion ='$sec' and mesi = '$mes'");
$visitast = tomarRegistrosCondicion($mysqli, "visitas_ip", "id", "desc", "seccion ='$sec' and mesi = '$mes'");

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


                                <div class="row">

                                    <!-- AllCP Grid -->
                                    <div class="col-md-12 allcp-grid">

                                        <!-- Perfomance -->
                                        <div class="panel mbn pt25" data-panel-title="false">


                                            </form>

                                            <table class="table">
                                                <thead><label for="mes">Selecciona un mes:</label>
                                                    <div style="display: flex;">
                                                        <? include("meses.php"); ?>

                                                        <div style="margin-left: 700px;">


                                                            <!-- crea un pdf con todas las visitias -->

                                                            <a href="libreria_pdf/visitas_pdf.php?sec=<?= $sec ?>&mes=<?= $mes ?>">
                                                                <img src="img/pdf.png" style="width: 50px"></a>
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <tr>
                                                        <th>IP</th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                        <!-- solo se muestra si los productos son individuales (productosa)-->
                                                        <? if ($sec == 'productosa') { ?>
                                                            <th>Producto</th>
                                                            <th>Visitas</th>
                                                        <? } else { ?>
                                                            <th>link</th>

                                                        <? } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?= count($visitast); ?> visitas a la sección <? if ($_GET['seccion'] == "productosa") {
                                                                                                        echo "Productos ampliados";
                                                                                                    } else { ?><?= $_GET['seccion']; ?><? } ?>
                                                    <?php foreach ($visitas as $hip): ?>
                                                        <tr>
                                                            <td><?= $hip["ip"]; ?></td>
                                                            <td><?= $hip["fecha"]; ?></td>
                                                            <td><?= $hip["hora"]; ?></td>
                                                            <?php if ($sec != 'productosa') { ?>
                                                                <td><?= $hip["link"]; ?></td>
                                                            <?php } else {
                                                                $producto = tomarRegistro($mysqli, "productos", "id ='" . $hip["link"] . "'"); ?>
                                                                <td><?= $producto["titulo"]; ?></td>
                                                                <?php
                                                                $cuentoP = tomarRegistrosCondicion($mysqli, "visitas_ip", "id", "desc", "seccion ='productosa' AND link = '" . $hip["link"] . "'");
                                                                $cuentp = count($cuentoP);
                                                                ?>
                                                                <td><?= $cuentp; ?></td>
                                                            <?php } ?>
                                                        </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>
                                        <!-- /AllCP Grid -->
                                    </div>
                                </div>
                                <!-- /AllCP Grid -->
                            </div>
                        </div>
                    </div>
                    <!-- /Column Center -->
            </section>
            <!-- /Content -->

            <!-- Page Footer -->
            <footer id="content-footer">
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
            </footer>
            <!-- /Page Footer -->

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

</body>

</html>